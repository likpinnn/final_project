<?php

use App\Http\Controllers\memberController;
use Illuminate\Support\Facades\Route;

// Route::get('/form', [memberController::class,'form']);

// Route::post('/form', [memberController::class,'insert'] );

// Route::get('/',[memberController::class,'view']);


Route::controller(memberController::class)->group(function(){
    Route::get('/form','form');

    Route::post('/form','insert')->name('form');

    Route::get('/','view')->name('list');

    Route::get('/edit/{id}','edit_show')->name('edit');

    Route::put('/edit/{id}','update')->name('update');

    Route::delete('/delete/{id}','destroy')->name('delete');
});