<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\EmployeeController;



Route::get('/',[AuthController::class,'index'])->name('login-get');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

//  dashboard route 
Route::get('/admin/dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');
Route::get('/admin/employee', [EmployeeController::class, 'index'])->name('admin.Employee');