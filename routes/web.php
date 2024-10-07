<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminConferenceController;
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Kliento posistemio maršrutai
Route::get('/conferences', [ClientController::class, 'index'])->name('conferences.index');
Route::get('/conferences/{id}', [ClientController::class, 'show'])->name('conferences.show');

// Darbuotojo posistemio maršrutai
Route::get('/employee/conferences', [EmployeeController::class, 'index'])->name('employee.conferences.index');
Route::get('/employee/conferences/{id}', [EmployeeController::class, 'show'])->name('employee.conferences.show');

// Administratoriaus posistemio maršrutai
Route::prefix('admin')->group(function () {
    Route::get('/conferences', [ConferenceController::class, 'index'])->name('admin.conferences.index');
    Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('admin.conferences.create');
    Route::post('/conferences', [ConferenceController::class, 'store'])->name('admin.conferences.store');
    Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('admin.conferences.edit');
    Route::put('/conferences/{id}', [ConferenceController::class, 'update'])->name('admin.conferences.update');
    Route::delete('/conferences/{id}', [ConferenceController::class, 'destroy'])->name('admin.conferences.destroy');

    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::post('/conferences/{id}/register', [ClientController::class, 'register'])->name('conferences.register');
    Route::get('/admin/conferences', [AdminConferenceController::class, 'index'])->name('admin.conferences.index');
    Route::get('/admin/conferences/create', [AdminConferenceController::class, 'create'])->name('admin.conferences.create');
    Route::get('/admin/conferences', [ConferenceController::class, 'index'])->name('admin.conferences.index');


});
