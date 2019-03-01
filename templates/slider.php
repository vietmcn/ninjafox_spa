<?php 
if ( !defined('ABSPATH') ) {
    exit;
}

add_action( 'ninja_front', 'ninja_slider' );

if ( !function_exists( 'ninja_slider' ) ) {
    function ninja_slider()
    {
        __render( '
                <div class="hero row" id="main-hero">
                <div class="title">
                    <div>
                        <span class="playfair">Spa &amp; Wellness</span>
                        <h2>An Nhiên Spa</h2>
                        <p>In you won <span>"secret snactuary"</span></p>
                    </div>
                </div> <!-- end of title -->

                <div class="hero-slider">
                    <div class="row item item-1">
                        <div class="overlay"></div>
                    </div>
                    <div class="row item item-2">
                        <div class="overlay"></div>
                    </div>
                </div> <!-- end of slider -->
                <div class="clearfix"></div>
                <a href="#" class="btn btn-default">Explore Victoria</a>
            </div> <!-- end of hero -->

        ');
    }
}