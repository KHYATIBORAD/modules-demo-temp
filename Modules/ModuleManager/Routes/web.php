<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Modules\ModuleManager\Http\Controllers\ModuleManagerController;

Route::prefix('modulemanager')->group(function() {
    Route::controller(ModuleManagerController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('all_modules', 'all_modules')->name('all_modules');
        Route::get('module-delete/{id}/{name}', 'moduleDelete')->name('modulemanager.module_delete');
        Route::get('module-status/{id}', 'moduleUpdateStatus')->name('modulemanager.module_status');
    });
});
