<?php
if (! defined('ABSPATH') ) {
    exit;
}
add_action( 'ninja_front', 'advantages' );
function advantages()
{
    __render('
        <section class="spa-advantages">
            <div class="container">
                <div class="row">
                    <div class="section-title col col-lg-8 col-lg-offset-2">
                        <span class="playfair">Spa Advantages</span>
                        <h2>Good for your health</h2>
                        <p>Spread over two floors, our beautiful spa offer a soothing environment in which you can rest, relax and feel competely rejuvenated.</p>
                    </div>
                </div>

                <div class="advantage-details row">
                    <div class="col col-md-6"> </div>

                    <div class="advantages col col-md-6">
                        <div class="row" id="first-advantage">
                            <div class="line">
                                <span class="before"></span>
                                <span class="point"></span>
                            </div>
                            <div class="icon col col-xs-2">
                                <i class="flaticon-hands"></i>
                            </div>
                            <div class="col col-xs-10">
                                <span class="playfair">Improve blood circulation</span>
                                <h3>Stress reduction &amp; relief</h3>
                            </div>
                        </div>
                        <div class="row" id="second-advantage">
                            <div class="line">
                                <span class="before"></span>
                                <span class="point"></span>
                            </div>
                            <div class="icon col col-xs-2">
                                <i class="flaticon-medical"></i>
                            </div>
                            <div class="col col-xs-10">
                                <span class="playfair">Stimulates the lymphatic system</span>
                                <h3>Carries away the bodys waste products</h3>
                            </div>
                        </div>
                        <div class="row" id="third-advantage">
                            <div class="line">
                                <span class="before"></span>
                                <span class="point"></span>
                            </div>
                            <div class="icon col col-xs-2">
                                <i class="flaticon-food"></i>
                            </div>
                            <div class="col col-xs-10">
                                <span class="playfair">Relax &amp; feel better</span>
                                <h3>Improve immune system</h3>
                            </div>
                        </div>
                        <div class="row" id="fourth-advantage">
                            <div class="line">
                                <span class="before"></span>
                                <span class="point"></span>
                            </div>
                            <div class="icon col col-xs-2">
                                <i class="flaticon-relax"></i>
                            </div>
                            <div class="col col-xs-10">
                                <span class="playfair">Protect your overall health</span>
                                <h3>Enhance your appearance</h3>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section> <!-- end of spa-advantages -->

    ');
}