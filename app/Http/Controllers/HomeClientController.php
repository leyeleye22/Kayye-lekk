<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeClientController extends Controller
{
    public function home(){
        return view('client.dashboard');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
}
