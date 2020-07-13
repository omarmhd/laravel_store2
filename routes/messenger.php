<?php

    /**
     * Laravel messenger routes.
     */

    Route::middleware('auth')->prefix('messenger')->group(function () {
        Route::get('t/{id}', 'MessageController@laravelMessenger')->name('messenger');
        Route::post('send', 'MessageController@store')->name('message.store');
        Route::get('threads', 'MessageController@loadThreads')->name('threads');
        Route::get('more/messages', 'MessageController@moreMessages')->name('more.messages');
        Route::delete('delete/{id}', 'MessageController@destroy1')->name('delete');
        // AJAX requests.
        Route::prefix('ajax')->group(function () {
            Route::post('make-seen', 'MessageController@makeSeen')->name('make-seen');
        });
    });
