<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
add_action( 'wp_footer', 'ninja_footer' );
function ninja_footer()
{
    __render( '
        <footer>
            <div class="container">
                <div class="row">
                    <div class="victoria col col-xs-6 col-md-3">
                        <img src="'.get_template_directory_uri().'/assets/img/logo-color.png" alt class="img img-responsive">
                        <p>An Nhiên Spa được thành lập từ năm 2015, là Trung tâm uy tín chuyên điều trị các bệnh lý về da bằng công nghệ sinh học và chăm sóc cơ thể toàn diện theo phương pháp dưỡng sinh.</p>
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/AnNhienSpa.coso2/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div> <!-- end of victoria -->

                    <div class="footer-about col col-xs-6 col-md-3">
                        <h2>About An Nhiên Spa</h2>
                        <ul>
                            <li>An Nhiên Spa &amp; spa</li>
                            <li>Hotline: 0896 613 089 </li>
                            <li>1110 A13 Phạm Văn Đồng, Quận Thủ Đức, TPHCM.</li>
                            <li>info@annhienspa.com</li>
                        </ul>
                    </div> <!-- end of footer-about  -->

                    <div class="explore col col-xs-6 col-md-3">
                        <h2>Explore</h2>
                        <ul>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Spa &amp; wellness</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Brochure</a></li>
                        </ul>
                    </div> <!-- end of explore  -->

                    <div class="usefull-links col col-xs-6 col-md-3">
                        <h2>Usefulllink</h2>
                        <ul>
                            <li><a href="#">Travel Weekly hotels and resorts</a></li>
                            <li><a href="#">Ski Industry &amp; Ski Resort </a></li>
                            <li><a href="#">Eratap Beach Island Resort</a></li>
                            <li><a href="#">Luxury Caribbean Resort </a></li>
                        </ul>
                    </div> <!-- end of usefull-links  -->
                </div> <!-- end of row -->

                <div class="row copyright">
                    <div class="col col-md-6">
                        <p><a href="#">An Nhiên Spa</a> &copy; <span>2018</span> All Right Reserved</p>
                    </div>

                    <div class="col col-md-6">
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="#"><img src="'.get_template_directory_uri().'/assets/img/visa.png" alt></a></li>
                            <li><a href="#"><img src="'.get_template_directory_uri().'/assets/img/pay-pal.png" alt></a></li>
                            <li><a href="#"><img src="'.get_template_directory_uri().'/assets/img/city.png" alt></a></li>
                            <li><a href="#"><img src="'.get_template_directory_uri().'/assets/img/skrill.png" alt></a></li>
                        </ul>
                    </div>
                </div> <!-- end of copyright -->
            </div> <!-- end of container -->
        </footer> <!-- end of footer -->
    ' );
}