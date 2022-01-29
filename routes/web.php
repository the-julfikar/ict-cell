<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;

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
    //return view('welcome');
    return view('home');
});

//Home Page
Route::get('/ict-cell', function () {
    return view('home');
});

Route::get('/cell', function () {
    return view('main');
});

Route::get('/cell-complain', function () {
    return view('complain');
});

Route::get('/cell-services', function () {
    return view('services');
});

//Adding Controllers
Route::post('addComplain',[ComplainController::class,'addComplain']);
