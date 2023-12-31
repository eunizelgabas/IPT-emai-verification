<?php

use App\Events\UserLog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\MedicineController;
use Illuminate\Queue\Jobs\Job;

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

Route::get('/', [AuthController::class , 'loginForm'])->name('login');
Route::post('/',[AuthController::class, 'login']);
Route::get('/register', [AuthController::class , 'registerForm']);
Route::post('/register', [AuthController::class , 'register'])->name('register');
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);

Route::middleware(['auth','verified'])->group (function(){

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AuthController::class, 'dashboard']);

    Route::get('/medicine', [MedicineController::class, 'index'])->name('medicine.index');
    Route::get('/medicine/create', [MedicineController::class, 'create'])->name('medicine.create');
    Route::post('/medicine', [MedicineController::class, 'store'])->name('medicine.store');
    Route::get('/medicine/edit/{medicine}', [MedicineController::class, 'edit'])->name('medicine.edit');
    Route::put('/medicine/{medicine}', [MedicineController::class, 'update'])->name('medicine.update');
    Route::delete('/medicine/{medicine}', [MedicineController::class, 'destroy'])->name('medicine.destroy');

    Route::get('/logs', [LogController::class, 'index'])->name('logs.index');
});


Route::get('/sendmail', [EmailController::class, 'sendEmail']);
