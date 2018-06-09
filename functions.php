<?php 
/**
 * Functions template wordpresss 
 * @link {https://developer.wordpress.org/themes/basics/theme-functions/}
 * @since 1.0
 * @author facebook/vietmcn.com
 */


if ( ! defined( 'N_EXTEND_FOLDER' ) ) {
    /**
     * Defined Import Folder 
     *
     * @since 1.0
     */
	define( 'N_EXTEND_FOLDER', __DIR__ );
}

if ( ! function_exists( 'import_template' ) ) {
    /**
     * Crate function import_template
     *
     * @since 1.0
     */
	function import_template( $name = NULL ) 
	{
		$inc = 'includes';
		$template = 'help-functions/template';
		require_once ( N_EXTEND_FOLDER .'/'.$inc.'/'.$template.'/'.$name.'.php' );
	}
}
if ( !function_exists( '__render' ) ) {
	function __render( $att = NULL )
	{
		echo $att;
	}
}
/**
 * GET the Version Template
 *
 * @since 1.0
 */
$theme       = wp_get_theme( 'ninjafox_spa' );
$ver         = $theme['Version'];

//import bootstrap
require_once 'src/bootstrap.php';
//import setup template
require_once 'src/_setup.php';

