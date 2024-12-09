<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;


Route::get('/', [EventController::class, 'index']);

Route::get('/volunteer', [EventController::class, 'index'])->name('volunteer.index'); // Index page
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.detail');
//Route::get('/volunteer/{id}/register', [EventController::class, 'register'])->name('volunteer.registration'); // Registration form
// Route::post('/volunteer/{id}/register', [EventController::class, 'storeRegistration'])->name('volunteer.registration.store'); // Save registratio
// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// Route::post('/volunteer/registration/{id}', [VolunteerController::class, 'registration'])->name('volunteer.register');

// Route::post('/events/mark/{id}', [EventController::class, 'markh'])->name('events.markh'); (GAJADI YA)

