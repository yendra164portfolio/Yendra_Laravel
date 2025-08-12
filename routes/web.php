<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Yendra Kana Kaha","Randy Brandom Yendeday","Pratama Iman Berkat Bate'e",
 "Jonatan Valento"];
 return view('mahasiswa',['mahasiswa'=> $arrMahasiswa]);
});

Route::get('dosen', function () {
    $arrDosen = [
        "Maya Fitrianti, M.M.",
        "Prof. Randy Brandom Yenddeday.",
        "Dr. Yafetady",
        "Dr. budi santoso."
    ];

    return view('dosen')->with('dosen', $arrDosen);
});

Route::get('gallery', function () {
    return view('gallery');
});
