<?php 
if ( !defined( 'ABSPATH' ) )  {
    exit;
}
add_action( 'ninja_front', 'ninja_about' );
add_action( 'ninja_front', 'ninja_beautifull' );
function ninja_about()
{
    __render('
        <div class="about-resort">
            <div class="row">
                <section class="about col col-sm-6">
                    <h2 hidden class="hidden">About</h2>
                    <div class="about-slider">
                        <div>
                            <div class="col col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 section-title">
                                <h3>AN NHIÊN SPA</h3>
                                <p>An Nhiên Spa là Trung tâm uy tín chuyên điều trị các bệnh lý về da bằng công nghệ sinh học và chăm sóc cơ thể toàn diện theo phương pháp dưỡng sinh.</p>
                            </div>
                            <img src="https://i.imgur.com/arwC5Yx.jpg" alt="Slide Picture" class="img img-responsive">
                        </div>
                    </div>
                </section> <!-- end of about -->
                
                <section class="resort col col-sm-6">
                    <div class="resort-slider">
                        <div class="item item-1">
                            <div class="overlay"></div>
                        </div>
                        <div class="item item-2">
                            <div class="overlay"></div>
                        </div>
                        <div class="item item-3">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="title">
                        <h2>An Nhiên Spa</h2>
                        <p class="playfair">luxury Spa</p>
                    </div>
                </section> <!-- end of resort -->
            </div> <!-- end of row -->
        </div> <!-- end of about-resort -->

    ');
}
function ninja_beautifull()
{
    __render( '
        <section class="beautifull-spa-and-faeture">
            <h2 hidden class="hidden">Feature</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="beautifull-spa col col-sm-6">
                        <!--<div class="col col-sm-6 col-sm-push-6">
                            <h2>Beautiful spa with soothing environment</h2>
                        </div>
                        <div class="col col-sm-6 col-sm-pull-6">
                            <p>Spread over two floors, our beautiful spa offer soothing environment in which you can rest, relax and feel competely rejuvenated</p>
                        </div>-->
                    </div>

                    <div class="faeture col col-md-6">
                        <div class="col col-xs-6" id="first-box">
                            <i class="flaticon-two"></i>
                            <h3>Chống Lão Hoá</h3>
                        </div>
                        <div class="col col-xs-6" id="second-box">
                            <i class="flaticon-three"></i>
                            <h3>Thư Giãn</h3>
                        </div>
                        <div class="col col-xs-6" id="third-box">
                            <i class="flaticon-fruit"></i>
                            <h3>CHĂM SÓC TOÀN THÂN</h3>
                        </div>
                        <div class="col col-xs-6" id="fourth-box">
                            <i class="flaticon-flower"></i>
                            <h3>Thải Độc</h3>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section> <!-- end of faeture -->

        <!--<section class="fun-fact">
            <h2 class="hidden">Fun Fact</h2>
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-6 col-sm-3">
                        <i class="flaticon-nature"></i>
                        <span class="number" id="happy-clients">2000+</span>
                        <span class="fact-title playfair">Khách Hàng Hài Lòng</span>
                    </div>
                    <div class="col col-xs-6 col-sm-3">
                        <i class="flaticon-relax-1"></i>
                        <span class="number" id="awards">725+</span>
                        <span class="fact-title playfair">Liệu Trình</span>
                    </div>
                    <div class="col col-xs-6 col-sm-3">
                        <i class="flaticon-food-1"></i>
                        <span class="number" id="coffee">260</span>
                        <span class="fact-title playfair">Cups of Coffee</span>
                    </div>
                    <div class="col col-xs-6 col-sm-3">
                        <i class="flaticon-medical-1"></i>
                        <span class="number" id="works">128</span>
                        <span class="fact-title playfair">Works Complete</span>
                    </div>
                </div>
            </div>
        </section> -->

    ' );
}