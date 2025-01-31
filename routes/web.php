<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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




Route::get("/",[HomeController::class,"index"]);
Route::get("/user",[AdminController::class,"user"]);
Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);

Route::get("/foodmenu",[AdminController::class,"foodmenu"]);
Route::post("/uploadfood",[AdminController::class,"upload"]);



Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);


Route::get("/updateview/{id}",[AdminController::class,"updateview"]);
Route::post("/update/{id}",[AdminController::class,"update"]);

Route::post("/reservation",[AdminController::class,"reservation"]);
Route::post("/uploadchef",[AdminController::class,"uploadchef"]);

Route::get("/viewreservation",[AdminController::class,"viewreservation"]);
Route::get("/viewchef",[AdminController::class,"viewchef"]);

Route::post("/addcart",[HomeController::class,"addcart"]);



Route::get("/redirects",[HomeController::class,"redirects"]);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
