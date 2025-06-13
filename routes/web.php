<?php

use App\Livewire\CounterApp;
use App\Livewire\CreatePost;
use App\Livewire\PostList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', CounterApp::class);
Route::get('/posts', PostList::class);
Route::get('/posts/create', CreatePost::class);
