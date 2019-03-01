<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
add_action( 'ninja_page', function() {

    if ( is_page( 'about' ) ) {
        __render( '
            <div class="banar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-6"></div>
                        <div class="col col-sm-6">
                            <span class="playfair">Spa &amp; Wellness</span>
                            <h2>Về Chúng Tôi An Nhiên Spa</h2>
                        </div>
                    </div>
                </div> <!-- end of container -->
            </div> <!-- end of banar -->

            <div class="page-breadcrumb simple-page-breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ol class="playfair breadcrumb">
                                <li><a href="/">Trang Chủ</a></li>
                                <li class="active">About</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end of container -->
            </div> <!-- end of page-breadcrumb -->

            <section class="about-victoria">
                <div class="container">
                    <div class="row section-title">
                        <div class="col col-md-10 col-md-offset-1">
                            <h2>An Nhiên Spa <span>Giới Thiệu</span></h2>
                            <p>An Nhiên Spa được thành lập từ năm 2015, là Trung tâm uy tín chuyên điều trị các bệnh lý về da bằng công nghệ sinh học và chăm sóc cơ thể toàn diện theo phương pháp dưỡng sinh. Sau 03 năm phát triển, An Nhiên Spa đã có 2 cơ sở tại Quận Thủ Đức.</p>

                            <p class="learn-more">Để tìm hiểu thêm về <span>An Nhiên Span</span> Bạn có thể tải brochure Về An Nhiên Spa Bằng Link Dưới Đây.</p>
                            <a href="#" class="btn btn-default"><i class="fa fa-download"></i>Tải Xuống</a>
                        </div>
                    </div>
                </div> <!-- end of container -->
            </section> <!-- end of about-victoria -->

            <section class="vic-partner">
                <h2 class="hidden">Partners</h2>
                <div class="container">
                    <div class="row">
                        <div class="top-button row">
                            <div class="col pull-left">
                                <p>Victoria service</p>
                            </div>
                            <div class="col col-sm-9"></div>
                            <div class="col pull-right">
                                
                            </div>
                        </div> <!-- end of service-button -->

                        <div class="partner-slider row">
                            <div class="col col-xs-12 item">
                                <a href="#"><img src="'.get_template_directory_uri().'/assets/img/about(1).jpg" alt></a>
                            </div>
                            <div class="col col-xs-12 item">
                                <a href="#"><img src="'.get_template_directory_uri().'/assets/img/about(2).jpg" alt></a>
                            </div>
                            <div class="col col-xs-12 item">
                                <a href="#"><img src="'.get_template_directory_uri().'/assets/img/about(3).jpg" alt></a>
                            </div>
                            <div class="col col-xs-12 item">
                                <a href="#"><img src="'.get_template_directory_uri().'/assets/img/about(4).jpg" alt></a>
                            </div>
                            <div class="col col-xs-12 item">
                                <a href="#"><img src="'.get_template_directory_uri().'/assets/img/about(1).jpg" alt></a>
                            </div>
                            <div class="col col-xs-12 item">
                                <a href="#"><img src="'.get_template_directory_uri().'/assets/img/about(2).jpg" alt></a>
                            </div>
                            <div class="col col-xs-12 item">
                                <a href="#"><img src="'.get_template_directory_uri().'/assets/img/about(3).jpg" alt></a>
                            </div>
                            <div class="col col-xs-12 item">
                                <a href="#"><img src="'.get_template_directory_uri().'/assets/img/about(4).jpg" alt></a>
                            </div>
                            <div class="col col-xs-12 item">
                                <a href="#"><img src="'.get_template_directory_uri().'/assets/img/about(1).jpg" alt></a>
                            </div>
                            <div class="col col-xs-12 item">
                                <a href="#"><img src="'.get_template_directory_uri().'/assets/img/about(2).jpg" alt></a>
                            </div>
                            <div class="col col-xs-12 item">
                                <a href="#"><img src="'.get_template_directory_uri().'/assets/img/about(3).jpg" alt></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of container -->
            </section> <!-- end of vic-partner -->
            <section class="middle-banar">
                <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-8 col-md-offset-2">
                                <h2>An Nhiên Spa</h2>
                                <p>Đến với An Nhiên Spa, Quý khách hàng sẽ cảm nhận sự hồi phục của làn da thông qua các quy trình điều trị chuyên sâu cùng với những bài massage độc đáo. Đánh thức mọi giác quan bằng các liệu pháp được thực hiện bởi những chuyên viên massage chuyên nghiệp.</p>
                                <a hidden href="#" class="btn btn-default">Explore Victoria</a>
                            </div>
                        </div>
                    </div>
            </section>
    
        ' );
    }
} );