<?php

/**
* ownCloud - user_ldap_ext
*
* @author Dominik Schmidt, extended by Manuel Delgado
* @copyright 2011 Dominik Schmidt dev@dominik-schmidt.de, Manuel Delgado manuel.delgado@ucr.ac.cr
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

require_once('apps/user_ldap_ext/user_ldap_ext.php');

OC_APP::registerAdmin('user_ldap_ext','settings');

// define LDAP_DEFAULT_PORT
define("OC_USER_BACKEND_LDAP_DEFAULT_PORT", 389);

// register user backend
OC_User::useBackend( "LDAP_EXT" );

// add settings page to navigation
$entry = array(
	'id' => "user_ldap_ext_settings",
	'order'=>1,
	'href' => OC_Helper::linkTo( "user_ldap_ext", "settings.php" ),
	'name' => 'LDAP'
);
// OC_App::addNavigationSubEntry( "core_users", $entry);
