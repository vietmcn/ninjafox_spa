<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
add_action( 'ninja_header', function() {
    /**
     * 
     * Logo 
     * @since 1.0
     * @author ninjafox
     * 
     */
    __render('
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="/"><img src="'.get_template_directory_uri().'/assets/img/logo-color.png" alt="Logo"></a>
                </div>

                <div id="navbar" class="pull-right collapse navbar-collapse">
                    '.wp_nav_menu( array(
                        'echo' => false,
                        'menu' => 'Header Menu',
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'container_class' => 'bg-menu bg-header',
                    ) ).'
                </div>
            </div> <!-- end of container -->
        </nav> <!-- end of nav -->

    ');
} );