<?php

use App\Livewire\CounterApp;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', CounterApp::class);
