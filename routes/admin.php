<?php

Route::get('/admin/dashboard', function(){
    return view('admin');
})->name('admin.dashboard');
