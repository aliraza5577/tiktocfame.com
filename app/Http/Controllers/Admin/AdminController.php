<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Str;


class AdminController extends Controller
{
    // Users Lists
    public function list(){
        $data['getRecord'] = User::getAdmin();
        $data['header_title'] = 'Admin';
        return view('backend.admin.list', $data);
    }
    // Add Admin
    public function add(){
        $data['header_title'] = 'Add User';
        return view('backend.admin.add', $data);
    }
    // Create Admin
    public function insert(Request $request){

        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $save = new User;
        $save->name = $request->name;
        $save->email  = $request->email;
        $save->password = Hash::make($request->password);
        $save->status = $request->status;
        $save->is_admin = 1;
        $save->remember_token = Str::random(40);
        $save->save();
        
        return redirect('admin/users')->with('success', 'User Added Succesfully.');
    }


    // Edit Admin
    public function edit($id){
        $data['getRecord'] = User::getSingle($id);
        $data['header_title'] = 'Edit User';
        return view('backend.admin.edit', $data);
    }
    // Update Admin
    public function update($id, Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id
        ]);
        $user = User::getSingle($id);
        $user->name = $request->name;
        $user->email  = $request->email;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->status = $request->status;
        $user->save();
        
        return redirect('admin/users')->with('success', 'User Updated Succesfully.');
    }
    // Delete The user
    public function delete($id){
        $user = User::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect()->back()->with('success', 'User Succesfully Deleted.');
    }
}
