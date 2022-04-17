<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    // public function getData(Request $req)
    // {
    //     $req->validate([
            
    //         'password'=>'required | min: 5',
    //         'name'=>'required | max: 10',
    //         'email'=>'required',


    //     ]);
    //     return $req->input();
    // }

    public function login(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        $usersInDB = User::all()->where('username', $username)->where('password', $password);
        if (count($usersInDB) <= 0) {
            return view('user-form', ['error' => "No user with the provided details!", "title"=>"Login"]);
        };
        $req->session()->put('user', $username);
        return redirect('profile');
    }
}
