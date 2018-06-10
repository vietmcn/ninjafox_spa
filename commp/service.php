<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
add_action( 'ninja_front', 'ninja_service' );
function ninja_service()
{
    __render( '
        <section class="services">
            <h2 hidden class="hidden">Service</h2>
            <div class="container">
                <div class="top-button row">
                    <div class="col pull-left">
                        <p>An Nhiên Spa service</p>
                    </div>
                    <div class="col col-sm-9"></div>
                    <div class="col pull-right">
                        <button class="btn btn-default">
                            <i class="flaticon-app"></i>
                        </button>
                        <button class="btn btn-default">
                            <i class="flaticon-squares-1"></i>
                        </button>
                        <button class="active btn btn-default">
                            <i class="flaticon-three-1"></i>
                        </button>
                    </div>
                </div> <!-- end of service-button -->

                <section class="facial row">
                    <h3 class="hidden">facial</h3>
                    <div class="left col col-md-6">
                        <div class="wrap-hover-content facial-left-thumbnail thumbnail">
                            <div class="hover-content">
                                <div class="">
                                    <img src="'.get_template_directory_uri().'/assets/img/icon.png" alt="">
                                    <p>Aromateraphy massage</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of left -->

                    <div class="right col col-md-6">
                        <div class="facial-right-thumbnail thumbnail">
                            <div class="victorial-facila-massage row">
                                <h4>An Nhiên Spa facial <span>massage</span></h4>
                                <p>Service Hours: 08.00am-20.00pm, Service price from $50</p>
                                <a href="#" class="btn btn-default">View An Nhiên Spa photo gallery</a>
                                <div class="like-comment">
                                    <a href="#"><i class="flaticon-shapes">125 Likes</i></a>
                                    <a href="#"><i class="flaticon-interface-2">125 Comments</i></a>
                                </div>
                            </div>

                            <div class="facial-slider row">
                                <div class="col com-xs-12 item">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <div class="overlay"></div>
                                            <img src="'.get_template_directory_uri().'/assets/img/img-1.jpg" alt>
                                        </a>
                                    </div>
                                </div>
                                <div class="col com-xs-12 item">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <div class="overlay"></div>
                                            <img src="'.get_template_directory_uri().'/assets/img/img-2.jpg" alt>
                                        </a>
                                    </div>
                                </div>
                                <div class="col com-xs-12 item">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <div class="overlay"></div>
                                            <img src="'.get_template_directory_uri().'/assets/img/img-3.jpg" alt>
                                        </a>
                                    </div>
                                </div>
                                <div class="col com-xs-12 item">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <div class="overlay"></div>
                                            <img src="'.get_template_directory_uri().'/assets/img/img-1.jpg" alt>
                                        </a>
                                    </div>
                                </div>
                        </div> <!-- end of facial-slider -->
                        </div>
                    </div> <!-- end of right -->
                </section> <!-- end of facial -->

                <section class="body row">
                    <h3 class="hidden">body</h3>
                    <div class="right col col-md-6">
                        <div class="body-left-thumbnail thumbnail">
                            <div class="victorial-body-massage row">
                                <h4>An Nhiên Spa Body <span>massage</span></h4>
                                <p>Service Hours: 08.00am-20.00pm, Service price from $50</p>
                                <a href="#" class="btn btn-default">View An Nhiên Spa photo gallery</a>
                                <div class="like-comment">
                                    <a href="#"><i class="flaticon-shapes">125 Likes</i></a>
                                    <a href="#"><i class="flaticon-interface-2">125 Comments</i></a>
                                </div>
                            </div>

                            <div class="row thumb">
                                <div class="col col-xs-4">
                                    <div class="thumbnail">
                                        <div class="overlay"></div>
                                        <img src="'.get_template_directory_uri().'/assets/img/img-1.jpg" alt>
                                        <a href="#">View</a>
                                    </div>
                                </div>
                                <div class="col col-xs-4">
                                    <div class="thumbnail">
                                        <div class="overlay"></div>
                                        <img src="'.get_template_directory_uri().'/assets/img/img-2.jpg" alt>
                                        <a href="#">View</a>
                                    </div>
                                </div>
                                <div class="col col-xs-4">
                                    <div class="thumbnail">
                                        <div class="overlay"></div>
                                        <img src="'.get_template_directory_uri().'/assets/img/img-3.jpg" alt>
                                        <a href="#">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of right -->

                    <div class="left col col-md-6">
                        <div class="wrap-hover-content body-right-thumbnail thumbnail">
                            <div class="hover-content">
                                <div class="">
                                    <img src="'.get_template_directory_uri().'/assets/img/icon.png" alt="">
                                    <p>Aromateraphy massage</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of left -->
                </section> <!-- end of body -->

                <section class="foot row">
                    <h3 class="hidden">Foot</h3>
                    <div class="left col col-md-6">
                        <div class="wrap-hover-content foot-left-thumbnail thumbnail">
                            <div class="hover-content">
                                <div class="">
                                    <img src="'.get_template_directory_uri().'/assets/img/icon.png" alt="">
                                    <p>Aromateraphy massage</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of left -->

                    <div class="right col col-md-6">
                        <div class="foot-right-thumbnail thumbnail">
                            <div class="victorial-foot-massage row">
                                <h4>An Nhiên Spa Foot <span>massage</span></h4>
                                <p>Service Hours: 08.00am-20.00pm, Service price from $50</p>
                                <a href="#" class="btn btn-default">View An Nhiên Spa photo gallery</a>
                                <div class="like-comment">
                                    <a href="#"><i class="flaticon-shapes">125 Likes</i></a>
                                    <a href="#"><i class="flaticon-interface-2">125 Comments</i></a>
                                </div>
                            </div>

                            <div class="row thumb">
                                <div class="col col-xs-4">
                                    <div class="thumbnail">
                                        <div class="overlay"></div>
                                        <img src="'.get_template_directory_uri().'/assets/img/img-1.jpg" alt>
                                        <a href="#">View</a>
                                    </div>
                                </div>
                                <div class="col col-xs-4">
                                    <div class="thumbnail">
                                        <div class="overlay"></div>
                                        <img src="'.get_template_directory_uri().'/assets/img/img-2.jpg" alt>
                                        <a href="#">View</a>
                                    </div>
                                </div>
                                <div class="col col-xs-4">
                                    <div class="thumbnail">
                                        <div class="overlay"></div>
                                        <img src="'.get_template_directory_uri().'//assets/img/img-3.jpg" alt>
                                        <a href="#">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of right -->
                </section> <!-- end of foot -->

                <a href="service.html" class="view-all-service btn btn-default">View all service</a>
            </div> <!-- end of container -->
        </section> <!-- end of service -->
    ' );
}