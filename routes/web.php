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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about-me", function () {
    return "Nama Saya <b>Dio Setiyawan</b>";
});

Route::get("/satu", function () {
    return "Ini adalah <b>Satu</b>";
});

Route::get("/dua", function () {
    return "Ini adalah <b>Dua</b>";
});

Route::get("/tiga", function () {
    return "Ini adalah <b>Tiga</b>";
});

Route::get("/empat", function () {
    return "Ini adalah <b>Empat</b>";
});

Route::get("/lima", function () {
    return "Ini adalah <b>Lima</b>";
});

Route::get('/testing-view', function () {
    return view('view-1');
});

use App\Http\Controllers\UtamaController;

Route::get("/utama/test", [UtamaController::class, "test"]);

use App\Http\Controllers\ControllerSatu;

Route::get("/utama/url1", [ControllerSatu::class, "method1"]);
Route::get("/utama/url2", [ControllerSatu::class, "method2"]);
Route::get("/utama/url3", [ControllerSatu::class, "method3"]);

use App\Http\Controllers\ControllerDua;

Route::get("/utama/url4", [ControllerDua::class, "method4"]);
Route::get("/utama/url5", [ControllerDua::class, "method5"]);
Route::get("/utama/url6", [ControllerDua::class, "method6"]);
