<?php

namespace App\Http\Controllers;
use App\Mail\RegisterMail;
use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Mail;
use Str;
use Auth;

class AuthController extends Controller
{
    public function login(){
        if(!empty(Auth::check()) && Auth::user()->is_admin == 1){
            return redirect('admin/dashboard');
        }
        return view('auth.login');
    }
    // CHeck User Login
    public function auth_login(Request $request){
        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1, 'status' => 0, 'is_delete' => 0], $remember)){

            if(!empty(Auth::user()->email_verified_at)){
                return redirect('admin/dashboard');
            }else{

                $user_id = Auth::user()->id;
                Auth::logout();

                $save = User::getSingle($user_id);
                $save->remember_token = Str::random(40);
                $save->save();

                Mail::to($save->email)->send(new RegisterMail($save));
                return redirect()->back()->with('error', 'Please First verify your email Address');
            }
        }else{
            return redirect()->back()->with('error', 'Please Enter Correct Information.');
        }
    }
    // Logout
    public function logout_admin(){
        Auth::logout();
        return redirect('login');
    }




    




    public function forget(){
        return view('auth.forget');
    }
    public function reset_password(Request $request){
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user)){
            $user->remember_token = Str::random(40);
            $user->save();
            
            Mail::to($user->email)->send(new ForgotPassword($user));
            return redirect()->back()->with('success', 'Please your email inbox and reset password');

        }else{
            return redirect()->back()->with('error', 'User Not Found.');
        }
    }
    public function reset($token){
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user)){
            $data['user'] = $user;
            return view('auth.reset');
        }else{
            abort(404);
        }
    }
    public function change_password($token, Request $request){
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user)){
            if($request->newPassword == $request->cPassword){
                $user->password = Hash::make($request->newPassword);
                if(empty($user->email_verified_at)){
                    $user->email_verified_at = date('Y-m-d H:i:s');
                }
                $user->remember_token = Str::random(40);
                $user->save();
                return redirect('login')->with('success', 'Your Password Successfully Reset.');
            }else{
                return redirect()->back()->with('error', 'Password and Confirm Password Does not Matched.');
            }
        }else{
            abort(404);
        }
    }







    public function register(){
        return view('auth.register');
    }


    public function create_user(Request $request){

        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->remember_token = Str::random(40);
        $save->save();

        Mail::to($save->email)->send(new RegisterMail($save));

        return redirect('login')->with('success', 'Your Account Register Succesfully. Check your inbox and verify your email Address.');
    }

    public function verify($token){
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user)){
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->remember_token = Str::random(40);
            $user->save();
            return redirect('login')->with('success', 'Your Account Succesfully Verified');
        }else{
            abort(404);
        }

    }
}
