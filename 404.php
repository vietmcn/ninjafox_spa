<?php 
/**
 * The 404 NotFound template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://developer.wordpress.org/themes/basics/template-hierarchy/#404-not-found}
 *
 * @package Ninjafox
 * @subpackage Wordpress 4x
 * @since 1.0
 * @author ninjafox
 */
get_header();
do_action( 'ninja_404' );
get_footer();