<?php
/*
Plugin Name: wp swap menus
Plugin Script: wp swap menus.php
Plugin URI:
Description: add arguments to menu set as "Primary"
License: GPL
Version: 0.1
Author: DMM
	*/
		
/* 
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
Online: http://www.gnu.org/licenses/gpl.txt
*/

function dmm_swap_menus ($args){
	if( 'primary' == $args['theme_location'] )
	{
		$args['depth'] = -1;
		$args['container_id'] = 'my_primary_menu';
	}

	return $args;
}

add_filter( 'wp_nav_menu_args', 'dmm_swap_menus' );
