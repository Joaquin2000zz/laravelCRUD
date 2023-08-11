<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
Route::post('/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::put('/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::delete('/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');
