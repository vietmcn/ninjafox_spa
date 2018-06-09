<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( ! defined( 'N_EXTEND_FOLDER' ) ) {
    /**
     * Defined Import Folder 
     *
     * @since 1.0
     */
	define( 'N_EXTEND_FOLDER', __DIR__ );
}

if ( ! function_exists( 'import_commp' ) ) {
    /**
     * Crate function import_commp
     *
     * @since 1.0
     */
	function import_commp( $name = NULL ) 
	{
		require_once ( N_EXTEND_FOLDER .'/commp'.$name.'.php' );
	}
}
if ( !function_exists( '__render' ) ) {
	function __render( $att = NULL )
	{
		echo $att;
	}
}