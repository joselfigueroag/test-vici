<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(UserController::class)->group( function() {
    Route::get('/users', 'index')->name('list_users');
    Route::get('/users/create', 'create')->name('create_user');
    Route::post('/users/create', 'store')->name('store_user');
    Route::get('/users/edit/{id}', 'edit')->name('edit_user');
    Route::put('/users/edit/{id}', 'update')->name('update_user');
    Route::get('/users/delete/{id}', 'destroy')->name('destroy_user');
});
