<?php


// Frontend
Route::get('/', 'AppController@index')->name('home');

Route::namespace('Admin')->group(function() {
    Route::post('contact_us', 'ContactUsController@store');
    Route::get('media_download/{id}', 'MediaLibraryController@download');
});

// set lang
Route::get('set_lang/{lang?}', function ($lang = 'en') {
    request()->session()->put('lang', $lang);
    return redirect()->back();
});

// Backend
Route::middleware(['auth', 'prevent-back-history'])->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    // 後台首頁
    Route::get('/', 'AdminController@index')->name('home');

    // 聯絡我們
    RouteHelper::resource('contact_us', [
        'create', 'edit', 'store', 'update',
    ]);

    // 後台各頁面
    RouteHelper::resources([
        'banner',
        'class_card',
        'form_download',
        'message_announcement',
        'school_environment',
    ], 'show');

    Route::resource('media_library', 'MediaLibraryController');
});

// Auth
Route::namespace ('Auth')->group(function () {

    // 登入
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');

    // 註冊
    // Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    // Route::post('register', 'RegisterController@register');
});
