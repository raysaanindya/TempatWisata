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

Route::get('/', [AppController::class,"home"]);

Route::get("hello",[AppController::class,"hello"]);
Route::get("template",function(){ return view('template'); });

Route::get("form-tambah",function(){ return view('form-tambah'); });
Route::get("hello",[AppController::class,"profil"]);
Route::get("hello",[AppController::class,"kontak"]);

Route::get("data-wisata",[AppController::class,"data_wisata"]);
Route::get("data-wisata/{id}/hapus",[AppController::class,"hapus_pegawai"]);
Route::get("tambah-wisata",[AppController::class,"tambah_wisata"]);
Route::post("tambah-wisata",[AppController::class,"proses_tambah_wisata"]);
Route::get("data-wisata/{id}/edit",[AppController::class,"edit_wisata"]);
Route::post("edit-wiasat",[AppController::class,"proses_edit_pegawai"]);