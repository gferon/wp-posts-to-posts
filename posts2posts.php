<?php
/*
Plugin Name: Posts 2 Posts
Plugin Author: scribu
Description: Create connections between posts
Version: 0.1


Copyright (C) 2010 scribu.net (scribu AT gmail DOT com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

define('P2P_META_KEY', '_p2p');

function _p2p_init() {
	require dirname(__FILE__) . '/scb/load.php';

	require dirname(__FILE__) . '/api.php';

	if ( is_admin() ) {
		require dirname(__FILE__) . '/admin.php';
	}
}
_p2p_init();
