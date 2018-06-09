<?php 
/**
 * Functions template wordpresss 
 * @link {https://developer.wordpress.org/themes/basics/theme-functions/}
 * @since 1.0
 * @author facebook/vietmcn.com
 */
/**
 * GET the Version Template
 *
 * @since 1.0
 */
$theme       = wp_get_theme( 'ninjafox_spa' );
$ver         = $theme['Version'];

//Import Src
require_once 'src/bootstrap.php';
require_once 'src/help-functions.php';
//Import Front
import_commp( 'front' );