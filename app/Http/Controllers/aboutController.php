<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class aboutController extends Controller
{
    //
    function insertAbout(Request $req){
        
        $req->validate([
            'title' => 'required',
            'content' => 'required',
            'address' => 'required',
            'file' => 'required',
            'phone' => 'required',
        ]);

        if($req -> hasFile('file')){

            $req -> validate([
                'image' => 'mines:jpg,png,jpeg,bmp'
            ]);

            $req -> file -> store('aboutPictures','public');

            $about = new About([
                'title' => $req -> get('title'),
                'content' => $req -> get('content'),
                'address' => $req -> get('address'),
                'picture_path' => $req -> file -> hashName(),
                'phone' => $req -> get ('phone')
            ]);

            $about -> save();
        }


    }
}
