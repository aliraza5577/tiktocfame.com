<?php

namespace App\Http\Controllers;
use App\Models\ContactModel;
use App\Models\TenOffModel;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    //Contact Queries Show Data
    public function index(){
        $data['getRecord'] = ContactModel::getRecord();
        $data['header_title'] = 'All Contact Queries';
        return view('backend.quote.contact', $data);
    }

    // Model View Request
    public function getQuoteDetails($id)
    {
        $quote = ContactModel::findOrFail($id);
        return response()->json($quote);
    }


    //Contact Queries Save Data
    public function add(Request $request){
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
        ]);

        $save = new ContactModel;
        $save->name = $request->name;
        $save->phone  = $request->phone;
        $save->email = $request->email;
        $save->company = $request->company;
        $save->message = $request->message;
        $save->save();
        return response()->json(['success' => true, 'message' => 'You Query submitted successfully!']);
    }



    //10 % Off Show Data
    public function ten_off(){
        $data['getRecord'] = TenOffModel::getRecord();
        $data['header_title'] = 'All Contact Queries';
        return view('backend.quote.ten_off', $data);
    }

    //10 % Off Queries Save Data
    public function add_ten_off(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);

        $save = new TenOffModel;
        $save->email = $request->email;
        $save->save();
        return response()->json(['success' => true, 'message' => 'You Query submitted successfully!']);
    }

}
