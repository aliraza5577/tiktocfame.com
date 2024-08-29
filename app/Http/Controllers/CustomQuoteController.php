<?php

namespace App\Http\Controllers;
use App\Models\CustomQuote;
use Illuminate\Http\Request;

class CustomQuoteController extends Controller
{
    //instent_quote Save Data
    public function add(Request $request){
        request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ]);


        $save = new CustomQuote;
        $save->name = $request->name;
        $save->phone  = $request->phone;
        $save->email = $request->email;
        $save->product_name = $request->product;
        $save->quantity = $request->quantity;
        $save->message = $request->message;
        $save->save();


        return redirect()->back()->with('success', 'Quote Submitted Successfully. Our represantative will be contect you soon.');


    }
}
