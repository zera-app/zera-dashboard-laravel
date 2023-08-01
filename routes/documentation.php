<?php

use App\Http\Controllers\Documentation\DocumentationController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'documentation', 'as' => 'documentation.', 'middleware' => 'auth'], function () {

    Route::get('/', [DocumentationController::class, 'index'])->name('index');

    Route::get('controller-helper', [DocumentationController::class, 'controllerHelper'])->name('controller-helper');
    Route::get('upload-file-helper', [DocumentationController::class, 'uploadFileHelper'])->name('upload-file-helper');
    Route::get('splade-helper', [DocumentationController::class, 'spladeHelper'])->name('splade-helper');

    Route::get('color', [DocumentationController::class, 'color'])->name('color');
    Route::get('sidebar', [DocumentationController::class, 'sidebar'])->name('sidebar');
    Route::get('config', [DocumentationController::class, 'config'])->name('config');

    Route::get('alert', [DocumentationController::class, 'alert'])->name('alert');
    Route::get('badge', [DocumentationController::class, 'badge'])->name('badge');
    Route::get('breadcrumb', [DocumentationController::class, 'breadcrumb'])->name('breadcrumb');
    Route::get('button', [DocumentationController::class, 'button'])->name('button');
    Route::get('card', [DocumentationController::class, 'card'])->name('card');
    Route::get('collapse', [DocumentationController::class, 'collapse'])->name('collapse');
    Route::get('modal', [DocumentationController::class, 'modal'])->name('modal');
    Route::get('tooltip', [DocumentationController::class, 'tooltip'])->name('tooltip');
    Route::get('input-float', [DocumentationController::class, 'inputFloat'])->name('input-float');

    //Splade
    Route::get('flash', [DocumentationController::class, 'flash'])->name('flash');
    Route::get('toast', [DocumentationController::class, 'toast'])->name('toast');
    Route::get('form', [DocumentationController::class, 'form'])->name('form');
    Route::get('link', [DocumentationController::class, 'link'])->name('link');
    Route::get('script', [DocumentationController::class, 'script'])->name('script');
    Route::get('toggle', [DocumentationController::class, 'toggle'])->name('toggle');
    Route::get('transition', [DocumentationController::class, 'transition'])->name('transition');
    Route::get('teleport', [DocumentationController::class, 'teleport'])->name('teleport');

    Route::get('input-overview', [DocumentationController::class, 'inputOverview'])->name('input-overview');
    Route::get('input', [DocumentationController::class, 'input'])->name('input');
    Route::get('textarea', [DocumentationController::class, 'textarea'])->name('textarea');
    Route::get('select', [DocumentationController::class, 'select'])->name('select');
    Route::get('checkbox', [DocumentationController::class, 'checkbox'])->name('checkbox');
    Route::get('radio', [DocumentationController::class, 'radio'])->name('radio');
    Route::get('file', [DocumentationController::class, 'file'])->name('file');
    Route::get('group', [DocumentationController::class, 'group'])->name('group');
    Route::get('submit', [DocumentationController::class, 'submit'])->name('submit');
    Route::get('wysiwyg', [DocumentationController::class, 'wysiwyg'])->name('wysiwyg');

    Route::get('model-binding', [DocumentationController::class, 'modelBinding'])->name('model-binding');
    Route::get('table-overview', [DocumentationController::class, 'tableOverview'])->name('table-overview');
    Route::get('table-query-builder', [DocumentationController::class, 'tableQueryBuilder'])->name('table-query-builder');
    Route::get('table-bulk-action', [DocumentationController::class, 'tableBulkAction'])->name('table-bulk-action');
    Route::get('table-export', [DocumentationController::class, 'tableExport'])->name('table-export');
    Route::get('table-spatie-query-builder', [DocumentationController::class, 'tableSpatieQueryBuilder'])->name('table-spatie-query-builder');
});
