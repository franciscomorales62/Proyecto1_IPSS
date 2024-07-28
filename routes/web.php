<?php

use Illuminate\Support\Facades\Route;

Route::get('/mantenedorprueba', function () {
    return view('mantenedorView');
});

Route::post('/mantenedor', function () {
    return view('mantenedorView2');
});
Route::get('/mantenedor', function () {
    return view('mantenedorView3');
});
Route::put('/mantenedor', function () {
    return view('mantenedorViewEliminarProyecto');
});
Route::delete('/mantenedor', function () {
    return view('mantenedorViewVerProyecto');
});
