<?php

use Illuminate\Support\Facades\Route;

use KimSpeer\Chirper\Http\Controllers\ChirpController;

Route::get('chirps', [ChirpController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('chirps');

Route::get('package', function () {
    return 'CHirper';
});
