<?php

use App\Http\Controllers\ControllerAfficher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/nahida', [ControllerAfficher::class, 'afficher'])->name('nahida.afficher');

Route::get('/dev', [App\Http\Controllers\ControllerDev::class, 'index'])->name('dev.index');


Route::get('/create', [App\Http\Controllers\ControllerR::class, 'create'])->name('prof.create');