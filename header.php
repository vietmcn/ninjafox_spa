<?php 
/**
 * The Header template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Ninjafox
 * @subpackage Wordpress 4x
 * @since 1.0
 * @author ninjafox
 */
?>
<html <?php language_attributes(); ?> prefix="og:http://ogp.me/ns#" class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php 
    /**
     * 
     * Create hook Meta Tag
     * Learn more: {@link https://codex.wordpress.org/Plugin_API/Action_Reference}
     * @since 1.0
     * @author ninjafox
     * 
     */
    do_action( 'ninja_meta' ); ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head();?>
</head>
<body data-body="Hello World" id="ninjaspa" class="annhienspa">
<div class="container">
<header id="girl-header"><?php do_action( 'girl_header' );?></header>
<main id="girl-main" class="main-set container">