<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.pages.main-site',['title' => 'Barbearia nova']);
});
