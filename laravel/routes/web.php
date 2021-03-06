<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('login');
});
Route::get('/register', function (){
    return view('register');
});
Route::post('/insertUser', [UserController::class, "insertUser"]);

Route::get("/users", [UserController::class, 'users']);

Route::get("/pics", function(){
    return view("pictures", ["paths" => public_path('uploads')]);
});

Route::post("/addImage",[UserController::class, "addImage"]);
