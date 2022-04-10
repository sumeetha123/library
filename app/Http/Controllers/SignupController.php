<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function index(Request $request) {
        $name = $request->input('username');
        echo 'Hi' .$name;
        echo '<br>';
    }
}
