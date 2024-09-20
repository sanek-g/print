<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Controllers\Front\HomeController::class);

Route::get('/about', function () {
    return view('about');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/contact', App\Http\Controllers\Front\ContactController::class)->name('contact');
Route::post('/contact_form_send', App\Http\Controllers\Front\ContactFormController::class)->name('contact.form.send');



Route::prefix('admin')->group(function(){
    Route::get('/', DashboardController::class)->name('admin.dashboard');

    Route::group(['prefix' => 'services'], function(){
        Route::get('/', App\Http\Controllers\Service\IndexController::class)->name('service.index');
        Route::get('/create', App\Http\Controllers\Service\CreateController::class)->name('service.create');
        Route::post('/', App\Http\Controllers\Service\StoreController::class)->name('service.store');
        Route::get('/{service}/edit', App\Http\Controllers\Service\EditController::class)->name('service.edit');
        Route::get('/{service}', App\Http\Controllers\Service\ShowController::class)->name('service.show');
        Route::patch('/{service}', App\Http\Controllers\Service\UpdateController::class)->name('service.update');
        Route::delete('/{service}', App\Http\Controllers\Service\DeleteController::class)->name('service.delete');
        Route::delete('/image/{serviceImage}', App\Http\Controllers\Service\ImageDeleteController::class)->name('serviceImage.delete');
    });
    
});