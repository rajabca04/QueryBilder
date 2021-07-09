<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/',[StudentController::class,"index"])->name("homepage");
Route::post('/insert',[StudentController::class,"insert"])->name("insert");
Route::get('/delete/{id}',[StudentController::class,"delete"])->name("delete");
Route::get('/update/{id}',[StudentController::class,"update"])->name("update");
Route::post('/update/{id}',[StudentController::class,"modify"])->name("modify");

