<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

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


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [EmployeeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::get('employee/create', [EmployeeController::class,'create'])->name('employee.create');
Route::get('employee/edit/{id}', [EmployeeController::class,'edit'])->name('employee.edit');
Route::post('employee/store', [EmployeeController::class,'store'])->name('employee.store');
Route::post('employee/update/{id}', [EmployeeController::class,'update'])->name('employee.update');
Route::get('employee/delete/{id}', [EmployeeController::class,'delete'])->name('employee.delete');
});

require __DIR__.'/auth.php';
