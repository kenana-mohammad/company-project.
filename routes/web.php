<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\CompanyController;
use App\Http\controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//dashborad
Route::group(['middleware' => ['auth','check']], function() {
    // view dashborad admin
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    //company
       Route::resource('company',CompanyController::class);

      
});