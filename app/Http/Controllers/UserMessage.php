<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMessage extends Controller
{
    //
    function getUserMessage(Request $req){
        $req -> validate([
            'firstName'=>'required | max:10',
            'lastNmame'=>'required | max:15',
            'phone'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);
        
        return "ok boss";
    }
}
