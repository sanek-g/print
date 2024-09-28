<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Controllers\Front\HomeController::class)->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', App\Http\Controllers\Front\ContactController::class)->name('contact');
Route::post('/contact_form_send', App\Http\Controllers\Front\ContactFormController::class)->name('contact.form.send');


Route::prefix('admin')->middleware('guest:admin')->group(function(){

    Route::get('/login', [App\Http\Controllers\Admin\AdminAuthController::class,'login'])->name('login');
    Route::post('login', [App\Http\Controllers\Admin\AdminAuthController::class,'authenticate'])->name('admin.authenticate');

});





    Route::prefix('admin')->middleware('auth:admin')->group(function(){

        Route::get('/', App\Http\Controllers\Admin\DashboardController::class)->name('admin.dashboard');
        Route::post('/logout',[App\Http\Controllers\Admin\AdminAuthController::class,'logout'])->name('admin.logout');

        Route::group(['prefix' => 'company'], function(){
            Route::get('/{company}/edit', App\Http\Controllers\Company\EditController::class)->name('company.edit');
            Route::get('/', App\Http\Controllers\Company\IndexController::class)->name('company.index');
            Route::patch('/{company}', App\Http\Controllers\Company\UpdateController::class)->name('company.update');
        });
    
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

        Route::group(['prefix' => 'faqs'], function(){
            Route::get('/', App\Http\Controllers\Faq\IndexController::class)->name('faq.index');
            Route::get('/create', App\Http\Controllers\Faq\CreateController::class)->name('faq.create');
            Route::post('/', App\Http\Controllers\Faq\StoreController::class)->name('faq.store');
            Route::get('/{faq}/edit', App\Http\Controllers\Faq\EditController::class)->name('faq.edit');
            Route::get('/{faq}', App\Http\Controllers\Faq\ShowController::class)->name('faq.show');
            Route::patch('/{faq}', App\Http\Controllers\Faq\UpdateController::class)->name('faq.update');
            Route::delete('/{faq}', App\Http\Controllers\Faq\DeleteController::class)->name('faq.delete');
        });
        
    });

