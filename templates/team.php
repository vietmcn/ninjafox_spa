<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
add_action( 'ninja_front', 'ninja_teamer' );
function ninja_teamer()
{
    __render('
        <section class="exparts">
            <div class="container">
                <div class="row">
                    <div class="section-title col col-lg-8 col-lg-offset-2">
                        <h2>An Nhiên Spa Exparts</h2>
                        <p>Spread over two floors, our beautiful spa offer a soothing environment in which you can rest, relax and feel competely rejuvenated</p>
                    </div>
                </div>

                <div class="row content">
                    <div class="col col-xs-4" id="left-member">
                        <div class="thumbnail">
                            <div class="img-frame">
                                <img src="'.get_template_directory_uri().'/assets/img/img-2.png" alt class="img img-responsive">
                            </div>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                            <div>
                                <p>Lusia Gracia</p>
                                <span class="playfair">Victoria Owner</span>
                            </div>
                        </div>
                    </div>

                    <div class="col col-xs-4">
                        <div class="thumbnail">
                            <div class="img-frame">
                                <img src="'.get_template_directory_uri().'/assets/img/img-2.png" alt class="img img-responsive">
                            </div>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                            <div>
                                <p>Lusia Gracia</p>
                                <span class="playfair">Victoria Owner</span>
                            </div>
                        </div>
                    </div>

                    <div class="col col-xs-4" id="right-member">
                        <div class="thumbnail">
                            <div class="img-frame">
                                <img src="'.get_template_directory_uri().'/assets/img/img-2.png" alt class="img img-responsive">
                            </div>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                            <div>
                                <p>Lusia Gracia</p>
                                <span class="playfair">Victoria Owner</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section> <!-- end of expart -->
    ');
}