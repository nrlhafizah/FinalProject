<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
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


Route::get('/action', function () {
    return view('staff.action');
});

Route::get("/",[homeControl::class,"index"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   return view('dashboard');
})->name('dashboard');

Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::get("/createproject",[homeControl::class,"addProject"]);
Route::get("/list",[homeControl::class,"leader"]);
Route::get("/listproject",[homeControl::class,"leader1"]);

Route::get("/detail",[homeControl::class,"showDetail"]);
Route::get('det/{id}',[homeControl::class,'showDetail']);

Route::view('create', 'admin.adminpage');
Route::POST("add",[homeControl::class,'addProject']);

Route::get("/createproject",[homeControl::class,"show"]);

Route::get('upd/{id}',[staffControl::class,'showlist']);
Route::POST("action",[staffControl::class,'updateProject']);
Route::view('stf', 'staff.staffpage');




