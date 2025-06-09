<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenos', function(){
    return 'essa é a pagina sobre nos';
});

