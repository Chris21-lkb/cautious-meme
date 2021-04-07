<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usermessage;

class UserMess extends Controller
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
        
        $newmessage = new usermessage;
        $newmessage -> firstName = $req -> firstName;
        $newmessage -> lastName = $req -> lastName;
        $newmessage -> phone = $req -> phone;
        $newmessage -> email = $req -> email;
        $newmessage -> message = $req -> message;
        $newmessage -> save();
        
        return redirect('contact');

        
    }
}
