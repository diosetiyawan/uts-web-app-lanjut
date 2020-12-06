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

Route::get("/utama/test", [UtamaController::class, "test"]);

use App\Http\Controllers\ControllerSatu;

Route::get("/utama/url1", [ControllerSatu::class, "method1"]);
Route::get("/utama/url2", [ControllerSatu::class, "method2"]);
Route::get("/utama/url3", [ControllerSatu::class, "method3"]);

use App\Http\Controllers\ControllerDua;

Route::get("/utama/url4", [ControllerDua::class, "method4"]);
Route::get("/utama/url5", [ControllerDua::class, "method5"]);
Route::get("/utama/url6", [ControllerDua::class, "method6"]);
