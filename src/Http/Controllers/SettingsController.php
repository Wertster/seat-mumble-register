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

namespace WarAndWormhole\Seat\MumbleRegister\Http\Controllers;


use Illuminate\Http\Request;
use Seat\Web\Http\Controllers\Controller;

/**
 * Class SettingsController.
 *
 * @package WarAndWormhole\Seat\MumbleRegister\Http\Controllers
 */
class SettingsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return view('mumble::settings');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Seat\Services\Exceptions\SettingException
     */
    public function update(Request $request)
    {
        $request->validate([
            'agent-url'                 => 'required|url',
            'encrypt-key-algorithm'     => 'required|string',
            'encrypt-cipher-algorithm'  => 'required|string',
            'encrypt-key'               => 'required|string',
            'encrypt-iv'                => 'alpha_num|size:16',
        ]);

        setting(['mumble.agent_url', $request->input('agent-url')], true);
        setting(['mumble.encrypt_key_algorithm', $request->input('encrypt-key-algorithm')], true);
        setting(['mumble.encrypt_cipher_algorithm', $request->input('encrypt-cipher-algorithm')], true);
        setting(['mumble.encrypt_key', $request->input('encrypt-key')], true);
        setting(['mumble.encrypt_iv', $request->input('encrypt-iv')], true);

        return redirect()->back()
            ->with('success', 'Mumber Register settings has been updated.');
    }
}
