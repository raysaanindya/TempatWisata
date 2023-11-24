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


Route::get('home', [AppController::class,"home"]);

Route::get("template",function(){ return view('template'); });

Route::get("profil",function(){ return view('profil');});
Route::get("data",function(){ return view('data');});

Route::get("data-wisata",[AppController::class,"data_wisata"]);
Route::get("data/{id}/hapus",[AppController::class,"hapus"]);
Route::get("tambah-wisata",[AppController::class,"tambah_wisata"]);
Route::post("tambah-wisata",[AppController::class,"proses_tambah_wisata"]);
Route::get("data/{id}/edit",[AppController::class,"edit"]);
Route::post("edit-wisata",[AppController::class,"proses_edit_wisata"]);
