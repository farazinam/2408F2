<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Students;


// Route::get('/', [Students::class, 'welcome']);
// Route::get('/About', [Students::class, 'about']);
// Route::get('/Contact', [Students::class, 'contact']);

Route::controller(students::class)->group(function (){
    Route::get('/', 'welcome');
    Route::get('/create', 'create');
    Route::post('/create', 'store');
    Route::get('/read', 'read');
    Route::get('/del/{id}', 'delete')->name('delete');
    Route::get('/edit/{id}', 'edit')->name('editing');
    Route::post('/update/{identity}', 'update')->name('update');
});
