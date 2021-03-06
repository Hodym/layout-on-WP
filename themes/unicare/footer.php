    <footer class="footer">
        <div class="container">
            <div class="footer-border">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                        <!-- /.footer-logo -->
                        <div class="footer-address">
                            <i class="icon">
                                <!--<img src="" alt="Marker icon">-->
                                <svg width="18" height="22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 12.5A3.75 3.75 0 119 5a3.75 3.75 0 010 7.5zm0-6A2.25 2.25 0 109 11a2.25 2.25 0 000-4.5z" fill="#FFCC5F"></path>
                                    <path d="M9 21.5l-6.327-7.462a25.635 25.635 0 01-.261-.338A8.167 8.167 0 01.75 8.75a8.25 8.25 0 1116.5 0 8.164 8.164 0 01-1.661 4.948l-.001.002s-.225.296-.259.335L9 21.5zm-5.391-8.704c.002 0 .176.231.215.28L9 19.182l5.182-6.113c.034-.04.209-.273.21-.274A6.676 6.676 0 0015.75 8.75a6.75 6.75 0 00-13.5 0 6.679 6.679 0 001.36 4.046h-.001z" fill="#FFCC5F"></path>
                                </svg>
                            </i>
                            <!-- /.icon -->
                            <p>Level 9 ariake Frontier Building Tower B, 3-7-26 Ariake, Koto-Ku, Tokyo, Japan</p>
                        </div>
                        <!-- /.footer-address -->
                    </div>
                    <!-- /.col-md-3 -->
                    <div class="col-md-2 offset-md-4">

                        <div class="d-none d-md-block d-lg-block d-xl-block col-md-6">
                            <small>Quick Links</small>
                            <?php wp_nav_menu([
                                'theme_location'  => 'bottom_menu',
                                'container'       => 'nav',
                                'container_class'      => 'footer-nav'
                            ]); ?>
                            <!-- /.footer-nav -->
                        </div>
                        <!-- /.footer-nav -->

                    </div>
                    <!-- /.col-md-2 offset-md-4 -->
                    <div class="col-md-2 offset-md-1">
                        <div class="footer-contact">
                            <small>Say Hello</small>
                            <ul>
                                <li><a href="mailto:hodimchukdmitriy@gmail.com">hodimchukdmitriy@gmail.com</a></li>
                                <li><a href="tel:+380685447198">+38 068 544 7198</a></li>
                            </ul>
                        </div>
                        <!-- /.footer-contact -->
                    </div>
                    <!-- /.col-md-2 offset-md-1 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.footer-border -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /.footer -->

    <?php wp_footer(); ?>

    <!-- Scripts -->
    <!-- Scroll up button -->
    <script>
        var btn = $('#button');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>

    <script>
        $('.main-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true
        });
    </script>

    <script>
        $('.brands-list').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

    </body>

    </html>