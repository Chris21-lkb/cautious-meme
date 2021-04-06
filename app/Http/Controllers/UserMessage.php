<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMessage extends Controller
{
    //
    function getUserMessage(Request $req){
        $req -> validate([
            'firstName' => 'required|max:30',
            'lastName' => 'required|max:30',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        return $req -> input();
    }
}
