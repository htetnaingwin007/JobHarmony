<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\FrontController::class, 'portalhome'])->name('home');
Route::get('/job-single/{id}',[App\Http\Controllers\FrontController::class, 'jobSingle'])->name('jobSingle');

Route::group(['prefix'=>'backend','as'=>'backend.'],function(){
    Route::get('/',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('jobpost',App\Http\Controllers\Admin\JobPostController::class);
    Route::resource('companyprofile',App\Http\Controllers\Admin\CompanyController::class);
    Route::resource('jobtype',App\Http\Controllers\Admin\JobTypeController::class);
    Route::resource('joblocation',App\Http\Controllers\Admin\JobLocationController::class);

    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
