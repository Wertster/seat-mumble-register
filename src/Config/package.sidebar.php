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

return [

    // Integrating with the SeAT menu is defined here.
    // Refer to the web package for a structure reference.
    'mumble' => [
        'name' => 'Mumble Register',
        'label' => 'mumble::menu.main_level',
        'plural' => true,
        'icon' => 'fas fa-key',
        'route_segment' => 'mumble',
        'entries'       => [
            [
                'name'  => 'Register',
                'label' => 'mumble::menu.register',
                'icon'  => 'fas fa-shield-alt',
                'route' => 'mumble.register',
            ],
            [
                'name'  => 'Settings',
                'label' => 'mumble::menu.settings',
                'icon'  => 'fas fa-cogs',
                'route' => 'mumble.settings',
            ],
        ],
    ],
];
