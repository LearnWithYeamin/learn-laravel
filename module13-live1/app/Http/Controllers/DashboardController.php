<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function dashboard(){
        return view('dashboard');
    }

    function home(){
        return view('dashboard.home');
    }

    function sidebar(){
        return view('dashboard.sidebar.sidebar');
    }

    function profile(){

        $name = "Learn With Yeamin 2";
        $email = "abc@example.com 2";
       // return view('dashboard.profile',['name' => $name, 'email' => $email]);
       return view('dashboard.profile', compact('name','email'));
    }
}
