<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});
Volt::route('/reverse/{reverse}', 'reverse');
Volt::route('/{mode}/{word}', 'mode');