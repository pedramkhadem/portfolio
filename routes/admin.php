<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminAuthenticationController;


/*
|--------------------------------------------------------------------------
|admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' =>'admin'  , 'as' =>'admin.'] , function(){

    Route::get('login' , [AdminAuthenticationController::class , 'login'])->name('login');
    Route::post('login' , [AdminAuthenticationController::class , 'handlelogin'])->name('handle-login');
    Route::get('logout' , [AdminAuthenticationController::class , 'logout'])->name('logout');
    /** Reset passwrod **/
    Route::get('forgot-password' , [AdminAuthenticationController::class , 'forgotpassword'])->name('forgot-password');
    Route::post('forgot-password' , [AdminAuthenticationController::class , 'sendResetlink'])->name('forgot-password.send');
    Route::get('reset-password/{token}' , [AdminAuthenticationController::class , 'resetpassword'])->name('reset-password');
    Route::post('reset-password' , [AdminAuthenticationController::class , 'handleResetpassword'])->name('reset-password.send');


});

Route::group(['prefix' =>'admin'  , 'as' =>'admin.' , 'middleware'=>['admin']] , function(){


    Route::get('dashboard' ,  [DashboardController::class , 'index'])->name('dashboard');

    /** Profile Handle */

    Route::put('profile-password-update/{id}',[ProfileController::class, 'passwordUpdate'])->name('profile-password.update');
    Route::resource('profile' ,ProfileController::class);





});
