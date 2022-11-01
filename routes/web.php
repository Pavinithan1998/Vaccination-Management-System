<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PublicController;

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
    return view('Auth.login');
});
Route::post('/login',[AuthController::class,'loginFunction'])->name('login');
Route::get('/admin/dashboard',function(){
    return view('Admin.dashboard');
});
Route::get('/staff/dashboard',function(){
    return view('Staff.dashboard');
});
Route::get('/public/dashboard',[PublicController::class,'publicDashboard']);
//staff register
Route::post('/staff',[AdminController::class,'StaffRegistration'])->name('staff');
Route::get('/admin/create-staff',function(){
    return view('admin.register');
});
//public register
Route::post('/public',[PublicController::class,'PublicRegistration'])->name('public');
Route::get('/public/register',function(){
    return view('public.register');
});
//smartvaccination
Route::post('/smartvaccination',[PublicController::class,'SmartVaccination'])->name('smartvaccination');
Route::get('/public/smartvc',function(){return view('public.SmartVC');});
Route::middleware(['s_check'])->get('/public/dashboard',[PublicController::class,'publicDashboard']);
Route::get('/public/details',[PublicController::class,'getPersonDetails']);
//personhistory
Route::view('/staff/history','staff.personHistory');
Route::post('/personhistory',[StaffController::class,'personHistory'])->name('personhistory');
//announcement
Route::view('/staff/announcement','staff.announcement');
Route::get('/staff/smart',[StaffController::class,'smartVaccination']);
Route::view('/staff/smartv','staff.smartv');
//delete
Route::get('delete/{id}',[StaffController::class,'historyDelete']);
//logout
Route::get('/logout',[AuthController::class,'logout']);