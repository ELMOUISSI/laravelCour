<?php
use App\Http\Controllers\ControllerR;
use App\Http\Controllers\ControllerAfficher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/nahida', [ControllerAfficher::class, 'afficher'])->name('nahida.afficher');

Route::get('/dev', [App\Http\Controllers\ControllerDev::class, 'index'])->name('dev.index');


//pour afficher la liste des professeurs

Route::get('/profs', [ControllerR::class, 'index'])->name('prof.index');


//route to show the form for creating a new resource
// pour afficher le formulaire de création d'un nouveau professeur
Route::get('/create', [ControllerR::class, 'create'])->name('prof.create');
 // pour Ajoute un professeur
Route::post('/profs', [ControllerR::class, 'store'])->name('prof.store');
// pour afficher un page edit professeur
Route::get('/edit/{id}', [ControllerR::class, 'edit'])->name('prof.edit');
 // pour mettre à jour un professeur
Route::put('/update/{id}', [ControllerR::class, 'update'])->name('prof.update');
// pour suppimer un professeur
Route::delete('/deletprof/{id}', [ControllerR::class, 'destroy'])->name('prof.delete');

