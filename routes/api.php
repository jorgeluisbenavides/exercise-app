<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::group([
    'prefix' => 'contacts',
], function() {
    Route::post('store', [ContactController::class, 'create']);
    Route::get('index', [ContactController::class, 'read']);
    Route::put('update', [ContactController::class, 'update']);
    Route::delete('delete', [ContactController::class, 'delete']);
});