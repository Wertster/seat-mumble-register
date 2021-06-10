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
use phpseclib3\Crypt\Blowfish;

/**
 * Class RegisterController.
 *
 * @package WarAndWormhole\Seat\MumbleRegister\Http\Controllers
 */
class RegisterController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return view('mumble::register');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Seat\Services\Exceptions\SettingException
     */
    public function update(Request $request)
    {
        $request->validate([
            'mumble-email'  => 'required|email',
        ]);

        $req = json_encode(array(
            'name' => auth()->user()->name,
            'email' => $request->input('mumble-email')
        ));

        $url = setting('mumble.agent_url', true);
        $cipher = new Blowfish('ecb');
        $cipher->setKey(setting('mumble.encrypt_key', true));

        $req_encrypted = base64_encode($cipher->encrypt($req));
        $headerArray = array("Content-type:base64;charset='utf-8'", "Accept:base64");
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headerArray);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $req_encrypted);
        $output = curl_exec($curl);
        curl_close($curl);

        return redirect()->back()
            ->with('success', $output);
    }
}
