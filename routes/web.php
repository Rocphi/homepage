<?php

Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('layouts.master');
})->name('home');

Route::prefix('dashboard')->group(function () {

    Route::get('', function () {
        return view('layouts.dashboard');
    })->middleware('auth')->name('dashboard-home');

});

Route::post('contact-form', 'ContactController@send')->name('send-contact-form');
