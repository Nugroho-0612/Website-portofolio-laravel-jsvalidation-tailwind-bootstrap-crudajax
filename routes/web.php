<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\AuthController;



// routes/Login and logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    // routes/projects
    Route::get('projects/dataTable', [ProjectController::class, 'serversideTable']);
    Route::resource('projects', ProjectController::class)->except(['create', 'edit']);

    // routes/certificates
    Route::get('certificates/dataTable', [CertificateController::class, 'serversideTable']);
    Route::resource('certificates', CertificateController::class);
});

// routes/user
Route::resource('/', UserController::class);