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

//Route::get("/",[homeControl::class,"index"]);

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

Route::view('create', 'admin.adminpage');
Route::POST("add",[homeControl::class,'addProject']);

Route::view('stf', 'staff.staffpage');
Route::POST("action",[staffControl::class,'updateProject']);

Route::get("/createproject",[homeControl::class,"show"]);
Route::get("/action",[staffControl::class,"showw"]);
Route::get("/updateproj",[staffControl::class,"showlist"]);

//Route::view('test1', 'staff.staffpage');
//Route::get('upd/{id}',[staffControl::class,"showlist"]);
//Route::POST("edit",[staffControl::class,'update']);



