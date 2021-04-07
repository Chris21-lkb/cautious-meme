<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coachpicture;

class CoachInfo extends Controller
{
    //
    function showInfo(){

        $data = coachpicture::all();
        return view('pages.Trainers',['infos' => $data]);
    }
}
