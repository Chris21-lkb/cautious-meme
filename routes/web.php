<?php

use App\Http\Controllers\coachController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserMess;
use App\Http\Controllers\CoachInfo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function (){
    return view('pages.Home');
});

Route::get('contact', function (){
    return view('pages.Contact');
});
Route::view('about','pages.About');

Route::post('userMessage',[UserMess::class,'getUserMessage']);

Route::view('upload','pages.upload');
Route::post('upload',[coachController::class,'uploadPicture']);
Route::get('trainers',[CoachInfo::class,'showInfo']);