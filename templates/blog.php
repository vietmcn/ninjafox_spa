<?php 
add_action( 'ninja_front', 'ninja_blog' );
function ninja_blog()
{
    __render( '
        <section class="latest-news">
            <h2 class="hidden">News</h2>
            <div class="container">
                <div class="top-button row">
                    <div class="col pull-left">
                        <p>Latest news</p>
                    </div>
                    <div class="col col-sm-9"></div>
                    <div class="col pull-right">
                        <button class="btn btn-default">
                            <i class="flaticon-app"></i>
                        </button>
                        <button class="active btn btn-default">
                            <i class="flaticon-squares-1"></i>
                        </button>
                        <button class="btn btn-default">
                            <i class="flaticon-three-1"></i>
                        </button>
                    </div>
                </div> <!-- end of top-button -->

                <div class="row content">
                    <div class="col col-sm-6">
                        <div class="date col col-xs-3">
                            <div>
                                <p>26 <span>June</span></p>
                            </div>
                        </div>
                        <div class="news-details col col-xs-9">
                            <p class="playfair">News for our blog</p>
                            <h3>Salon &amp; skin care</h3>
                            <p>Lorem ipsum dolor sit amet consectuere colorado. Secrets Resorts &amp; Spas offer adults an escape to romance and sensuality in spectacular oceanfront settings. </p>
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="date col col-xs-3">
                            <div>
                                <p>26 <span>June</span></p>
                            </div>
                        </div>
                        <div class="news-details col col-xs-9">
                            <p class="playfair">News for our blog</p>
                            <h3>Salon &amp; skin care</h3>
                            <p>Lorem ipsum dolor sit amet consectuere colorado. Secrets Resorts &amp; Spas offer adults an escape to romance and sensuality in spectacular oceanfront settings. </p>
                        </div>
                    </div>
                </div> <!-- end of content -->

                <div class="links">
                    <a href="#" class="btn btn-default">Load more</a>
                    <a href="blog.html" class="btn btn-default">Our blog</a>
                </div>
            </div> <!-- end of container -->
        </section> <!-- end of news -->
    ' );
}