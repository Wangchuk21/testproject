<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('register',[App\Http\Controllers\RegistrationController::class, 'register'])-> name('register');

Route::get('create_role_index', function () {
    return view('create_role_index');
});

Route::post('create_role',[App\Http\Controllers\RegistrationController::class, 'create_role'])-> name('create_role');
Route::post('update_role',[App\Http\Controllers\RegistrationController::class, 'update_role'])-> name('update_role');

Route::get('/get_role/{id}/{status}/{param_type}',[App\Http\Controllers\RegistrationController::class, 'get_role'])-> name('get_role');

Route::get('edit_role/{id}',[App\Http\Controllers\RegistrationController::class, 'edit_role'])-> name('edit_role');

Route::get('delete_role/{id}',[App\Http\Controllers\RegistrationController::class, 'delete_role'])-> name('delete_role');

Route::post('regester_new_user',[App\Http\Controllers\RegistrationController::class, 'regester_new_user'])-> name('regester_new_user');
