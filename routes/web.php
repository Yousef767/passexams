<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\{
    AdminController,
    CategoryController,
    PaymentController,
    RequestController,
    ServiceController,
};
Route::group(['as' => 'front.'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq.index');
    Route::get('/instructions', [HomeController::class, 'instructions'])->name('instructions.index');
    Route::get('/store', [HomeController::class, 'store'])->name('store.index');
    Route::post('/store', [HomeController::class, 'storeData'])->name('store.store');
    Route::get('/why-us', [HomeController::class, 'whyUs'])->name('why-us.index');
});

Route::group(['prefix' => 'admin'], function () {

    Auth::routes([
        'register' => false,
    ]);
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::resource('categories', CategoryController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('requests', RequestController::class);
    Route::resource('payments', PaymentController::class);

    Route::get('requests/mark-as-read/{id}', [RequestController::class, 'markAsRead'])->name('requests.read');


});
