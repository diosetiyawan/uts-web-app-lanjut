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
use App\Http\Controllers\UtamaController;

Route::get("/home", [UtamaController::class, "home"])->name("home");
Route::get("/survei", [UtamaController::class, "survei"])->name("survei");
Route::get("/biodata", [UtamaController::class, "biodata"])->name("biodata");
Route::get("/tentang", [UtamaController::class, "tentang"])->name("tentang");
Route::get("/kontak", [UtamaController::class, "kontak"])->name("kontak");

Route::post("/proses", [UtamaController::class, "proses"])->name("survei_proses");
Route::post("/kirim", [UtamaController::class, "kirim"])->name("biodata_kirim");