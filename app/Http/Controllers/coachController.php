<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coachpicture;

class coachController extends Controller
{
    //
    function uploadPicture(Request $req){

        $req->validate([
            'imageName' => 'required',
            'coachName' => 'required',
            'file' => 'required'
        ]);
        if($req -> hasFile('file')){

            $req -> validate([
                'image' => 'mines:jpg,png,jpeg,bmp'
            ]);

            $req -> file -> store('images','public');

            $picture = new coachpicture([
                'coachName' => $req -> get('coachName'),
                'imageName' => $req -> get('imageName'),
                'file_path' => $req -> file -> hashName()
            ]);

            $picture -> save();
        }

        return 'Okay boss, everything is okay';
    }
}
