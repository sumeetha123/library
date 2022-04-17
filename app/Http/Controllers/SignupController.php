<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    // public function index(Request $request) {
    //     $name = $request->input('username');
    //     echo 'Hi' .$name;
    //     echo '<br>';
    // }

    public function getData(Request $req)
    {
        $req->validate([
            
            'password'=>'required | min: 5',
            'name'=>'required | max: 10',
            'email'=>'required',


        ]);
        return $req->input();
    }
}
