<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2021  Kagurazaka Nyaa <developer@waw-eve.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

return [
    'agent_url'                     => 'Agent URL',
    'agent_url_desc'                => 'Deploy https://hub.docker.com/r/alliancewaw/seat-mumble-register and fill it address here',
    'encrypt_key_algorithm'         => 'Encrypt Key Algorithm',
    'encrypt_key_algorithm_desc'    => 'Encrypt Key Algorithm, default is Blowfish',
    'encrypt_cipher_algorithm'      => 'Encrypt Cipher Algorithm',
    'encrypt_cipher_algorithm_desc' => 'Encrypt Cipher Algorithm, default is Blowfish',
    'encrypt_key'                   => 'Encrypt Key',
    'encrypt_key_desc'              => 'Communication encryption key, used to encrypt the communication with the agent',
    'encrypt_iv'                    => 'Encrypt IV',
    'encrypt_iv_desc'               => 'The initial vector of communication encryption, which is valid only when the encryption algorithm used requires this variable',
];
