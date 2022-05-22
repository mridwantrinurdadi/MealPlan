<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/profile', function () {
    return view('Profile', [
        "Name" => "Mochamad Ridwan Tri NurDadi",
        "Gender" => "Laki-Laki",
        "Contact" => "087783270137",
        "Email" => "mrdwntrind999@gmail.com",
        "image" => "Ridwan.jpg",
    ]);
});

