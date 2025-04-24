<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Table;
use App\Models\Zone;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    /* $miPrimerUsuario = User::find(1);
    dump($miPrimerUsuario); */
    $zones = Zone::orderBy('id')->get();
    dump($zones);
    return;
});

