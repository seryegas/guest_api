<?php

use Illuminate\Support\Facades\Route;
use app\Modules\Guest\Http\Controller\GuestController;

Route::prefix('api/guests')->group(function () {
    Route::get('/', [GuestController::class, 'index']);
    Route::post('/', [GuestController::class, 'store']);
    Route::get('/{id}', [GuestController::class, 'show']);
    Route::put('/{id}', [GuestController::class, 'update']);
    Route::delete('/{id}', [GuestController::class, 'destroy']);
});
