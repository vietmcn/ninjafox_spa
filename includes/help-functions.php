<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( ! function_exists( 'import_commp' ) ) {
    /**
     * Crate function import_commp
     *
     * @since 1.0
     */
	function import_commp( $name = NULL ) 
	{
        $folder = 'commp';
		require_once ( N_EXTEND_FOLDER .'/'.$folder.'/'.$name.'.php' );
	}
}
if ( !function_exists( '__render' ) ) {
	function __render( $att = NULL )
	{
		echo $att;
	}
}
function ninja_Class()
{
	if ( is_page( 'service' ) ) {
		echo 'service';
	} elseif ( is_page( 'about' ) ) {
		echo 'about';
	}
}