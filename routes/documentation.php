<?php

use App\Http\Controllers\Documentation\DocumentationController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'documentation', 'as' => 'documentation.'], function () {

    Route::get('/', [DocumentationController::class, 'index'])->name('index');

    Route::get('sidebar', [DocumentationController::class, 'sidebar'])->name('sidebar');
    Route::get('card', [DocumentationController::class, 'card'])->name('card');
    Route::get('button', [DocumentationController::class, 'button'])->name('button');
    Route::get('input', [DocumentationController::class, 'input'])->name('input');

    Route::get('controller-helper', [DocumentationController::class, 'controllerHelper'])->name('controller-helper');
    Route::get('upload-file-helper', [DocumentationController::class, 'uploadFileHelper'])->name('upload-file-helper');
    Route::get('splade-helper', [DocumentationController::class, 'spladeHelper'])->name('splade-helper');
});
