<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coachpicture;

class coachController extends Controller
{
    //
    function uploadPicture(Request $req){

        $req->validate([
            'coachName' => 'required',
            'description' => 'required',
            'file' => 'required'
        ]);
        if($req -> hasFile('file')){

            $req -> validate([
                'image' => 'mines:jpg,png,jpeg,bmp'
            ]);

            $req -> file -> store('trainerPictures','public');

            $picture = new coachpicture([
                'coachName' => $req -> get('coachName'),
                'description' => $req -> get('description'),
                'file_path' => $req -> file -> hashName()
            ]);

            $picture -> save();
        }

        return view('pages.upload');
    }
}
