<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

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
Route::get('/a', function () {
    return view('frontend.test');
});
Route::get('/', [HomeController::class, 'index']);
Route::post('/upload_contact' ,[HomeController::class,'upload_contact']);
// Route::post('/a' ,[HomeController::class,'a']);