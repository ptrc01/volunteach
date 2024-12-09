<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\AuthController;


Route::get('/', [ClientController::class, 'navigateToHome'])->name('client.index');
Route::get('/aboutUs', [ClientController::class, 'navigateToAboutUs'])->name('client.aboutUs');


Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('doRegis', [AuthController::class, 'doRegis'])->name('doRegis');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('doLogin', [AuthController::class, 'doLogin'])->name('doLogin');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/adminDashboard', [EventController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/event', [EventController::class, 'showEvent'])->name('event.list');
Route::get('/event/{event}', [EventController::class, 'eventDetails'])->name('event.detail');
Route::get('/events/create', [EventController::class, 'createEventForm'])->name('event.create');
Route::post('/events', [EventController::class, 'storeEvent'])->name('event.store');
Route::get('/events/{event}/edit', [EventController::class, 'showEditForm'])->name('event.edit');
Route::put('/events/{event}', [EventController::class, 'updateEvent'])->name('event.update');
Route::delete('/events/{event}', [EventController::class, 'deleteEvent'])->name('event.delete');

Route::get('/events/{event}', [ParticipantController::class, 'showDetails'])->name('event.details');
Route::post('/event/{event}/register', [ParticipantController::class, 'submitRegister'])->name('participant.store');


