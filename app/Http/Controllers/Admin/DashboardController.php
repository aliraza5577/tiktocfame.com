<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard
    public function dashboard(){
        $data['header_title'] = 'Dashboard';
        return view('backend.dashboard', $data);
    }
}
