<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\AdminController;


Route::get('/', [EventController::class, 'index']);

Route::get('/home', function() {
    return view('home');
});

Route::get('/aboutus', function() {
    return view('aboutus');
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
});


// Route::prefix('admin')->group(function () {
//     Route::get('/events', [EventController::class, 'index'])->name('admin.events.index');
//     Route::get('/events/create', [EventController::class, 'create'])->name('admin.events.create');

// });

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [EventController::class, 'index'])->name('admin.dashboard');
    Route::get('/events/create', [EventController::class, 'create'])->name('admin.events.create');
    Route::post('/events', [EventController::class, 'store'])->name('admin.events.store');
    Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
    Route::put('/events/{id}', [EventController::class, 'update'])->name('admin.events.update');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('admin.events.destroy');
});



