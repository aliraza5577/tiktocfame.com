<?php

namespace App\Http\Controllers;
use App\Models\CustomQuote;
use Illuminate\Http\Request;
use Str;


class CustomQuoteController extends Controller
{


    //instent_quote Save Data
    public function index(){
        $data['getRecord'] = CustomQuote::getRecord();
        $data['header_title'] = 'All Instant Quotes';
        return view('backend.quote.custom', $data);
    }



    // Model View Request
    public function getQuoteDetails($id)
    {
        $quote = CustomQuote::findOrFail($id);
        return response()->json($quote);
    }






    //instent_quote Save Data
    public function add(Request $request){
        request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'image' => 'max:2048'
        ]);

        $image = $request->file('image');
        if(!empty($image)){
            if($image->isValid()){
                $ext = $image->getClientOriginalExtension();
                $randomStr = date('Ymdhis').Str::random(10);
                $filename = strtolower($randomStr).'.'.$ext;
                $image->move('public/upload/custom_quote', $filename);
                $image = $filename;
            }
        }
        $save = new CustomQuote;
        $save->name = $request->name;
        $save->phone  = $request->phone;
        $save->email = $request->email;
        $save->length = $request->length;
        $save->width = $request->width;
        $save->dimension = $request->dimension;
        $save->scale = $request->scale;
        $save->quantity = $request->quantity;
        $save->message = $request->message;
        $save->image  = $image;
        $save->save();


       return response()->json(['success' => true, 'message' => 'Custom Quote Submitted Successfully. Our representative will contact you soon.']);


    }
}
