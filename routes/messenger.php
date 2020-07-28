<?php

    /**
     * Laravel messenger routes.
     */

    Route::middleware('auth')->prefix('messenger')->group(function () {
        Route::get('t/{id}', 'MessageController@laravelMessenger')->name('messenger');
        Route::get('/chats', 'MessageController@chat')->name('chats');
        Route::post('send', 'MessageController@store')->name('message.store');
        Route::get('threads', 'MessageController@loadThreads')->name('threads');
        Route::get('more/messages', 'MessageController@moreMessages')->name('more.messages');
        Route::delete('delete/{id}', 'MessageController@destroy1')->name('delete');
        // AJAX requests.
        Route::prefix('ajax')->group(function () {
            Route::post('/make-seen', 'MessageController@makeSeen')->name('make-seen');
        });
    });

    // Route::middleware('auth')->prefix('backend/messenger')->group(function () {

    //     Route::get('t/{id}', 'BackendMessangerController@laravelMessenger')->name('backend.messenger');
    //     Route::get('chats', 'BackendMessangerController@chat')->name('backend.chats');
    //     Route::post('send', 'BackendMessangerController@store')->name('backend.message.store');
    //     Route::get('threads', 'BackendMessangerController@loadThreads')->name('backend.threads');
    //     Route::get('more/messages', 'BackendMessangerController@moreMessages')->name('backend.more.messages');
    //     Route::delete('delete/{id}', 'BackendMessangerController@destroy1')->name('backend.delete');
    //     // AJAX requests.
    //     Route::prefix('ajax')->group(function () {
    //         Route::post('make-seen', 'BackendMessangerController@makeSeen')->name('backend.make-seen');
    //     });

    // });