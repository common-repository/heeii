<?php
/*
Plugin Name: Heeii
Plugin URI: http://www.heeii.com/wordpress
Description: Adds a Heeii Widget to your blog. This widget will, based on the (blog) text, suggest other sites with a simular subject. Check <a href="http://www.heeii.com/wordpress">www.heeii.com/wordpress</a>
Version: 1.02
Author: Joris Röling
Author URI: http://www.heeii.com/credits
*/

/* $Id: heeii.php 17198 2007-08-20 12:32:41Z jorisroling $ */

/*  Copyright 2007 Heeii  (email : info@heeii.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

	add_action('wp_head', 'heeii_js_header' );

	function heeii_js_header()
	{
	  wp_print_scripts( array( 'heeii' ));
?>
	<script type="text/javascript" src="http://www.heeii.com/embedded/heeii.js"></script>
	<script type="text/javascript">
		Heeii.source=['#main H1','#main H2','#main P','#content H1','#content H2','#content P'];
		Heeii.maxHits=6;
	</script>
<?php
	}


	add_action('wp_meta', 'heeii_block');
	function heeii_block()
	{
?>
	<p />
	<div id="heeii"class="heeii"></div>
<?php
	}


?>