<?php
/*
This file is part of SeAT

Copyright (C) 2021  Kagurazaka Nyaa <developer@waw-eve.com>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

// Namespace all of the routes for this package.
Route::group([
    'namespace'  => 'WarAndWormhole\Seat\MumbleRegister\Http\Controllers',
], function () {

    Route::group([
        'prefix'     => 'mumble',
        'middleware' => ['web', 'auth', 'locale'],
    ], function () {

        Route::group([
            'middleware' => 'can:mumble.register',
        ], function () {
            Route::get('/register')
                ->name('mumble.register')
                ->uses('RegisterController@index');
            Route::post('/register')
                ->name('mumble.register')
                ->uses('RegisterController@update');
        });
        Route::group([
            'middleware' => 'can:global.superuser',
        ], function () {
            Route::get('/settings')
                ->name('mumble.settings')
                ->uses('SettingsController@index');
            Route::post('/settings')
                ->name('mumble.settings')
                ->uses('SettingsController@update');
        });
    });
});
