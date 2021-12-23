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

Route::get("/list",[homeControl::class,"leader"]);
Route::get("/det{id}",[homeControl::class,"showlist"]);
Route::get("/listproject",[homeControl::class,"leader1"]);

Route::view('create', 'admin.adminpage');
Route::POST("add",[homeControl::class,'addProject']);
Route::get("/createproject",[homeControl::class,"show"]);

Route::view('stf', 'staff.staffpage');
Route::POST("action",[staffControl::class,'updateProject']);

Route::get("/action",[staffControl::class,"showForm"]);
Route::get("/upd{id}",[homeControl::class,"showDetail"]);

Route::get("/del{id}",[staffControl::class,"deleteProject"]);







