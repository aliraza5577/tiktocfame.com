<?php

namespace App\Http\Controllers;
use App\Models\InstantQuote;
use Illuminate\Http\Request;

class InstantQuoteController extends Controller
{

    //instent_quote Save Data
    public function index(){
        $data['getRecord'] = InstantQuote::getRecord();
        $data['header_title'] = 'All Instant Quotes';
        return view('backend.quote.instant', $data);
    }

    //instent_quote Save Data
    public function add(Request $request){
        request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ]);
        $save = new InstantQuote;
        $save->name = $request->name;
        $save->phone  = $request->phone;
        $save->email = $request->email;
        $save->product_name = $request->product;
        $save->quantity = $request->quantity;
        $save->message = $request->message;
        $save->save();
        return redirect()->back()->with('success', 'Quote Submitted Successfully. Our represantative will be contect you soon.');
    }


    // Model
    // CustomQuoteController.php
    public function getQuoteDetails($id)
    {
        $quote = InstantQuote::findOrFail($id);
        return response()->json($quote);
    }


}
