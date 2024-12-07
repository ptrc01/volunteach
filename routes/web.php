<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;


Route::get('/', [EventController::class, 'index']);

Route::get('/home', function() {
    return view('home');
});