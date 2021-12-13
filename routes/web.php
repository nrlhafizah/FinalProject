<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\staffControl;

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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get("/",[homeControl::class,"index"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get("/redirect",[homeControl::class,"redirectFunct"]);
Route::get("/list",[adminControl::class,"list"]);


Route::view('test', 'admin.adminpage');
Route::POST("add",[adminControl::class,'addProject']);

Route::get("/listproject",[staffControl::class,"show"]);
Route::get("/updateproj",[staffControl::class,"showlist"]);

Route::view('test1', 'staff.staffpage');
Route::get('upd/{id}',[staffControl::class,"showlist"]);
Route::POST("edit",[staffControl::class,'update']);



