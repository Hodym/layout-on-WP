<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<section class="main">
    <div class="container">
        <div class="main-slider">

            <?php if (have_rows('home_first_screen')) : ?>

                <?php while (have_rows('home_first_screen')) : the_row();
                    $title = get_sub_field('first_screen_title');
                    $desc = get_sub_field('first_screen_desc');
                    $link = get_sub_field('first_screen_link');
                    $linkName = get_sub_field('first_screen_link_name');
                    $image = get_sub_field('first_screen_image');
                ?>
                    <div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="main-content">
                                    <h1 class="title"><?= $title ?></h1>
                                    <p><?= $desc ?></p>
                                    <a href="<?= $link ?>"><?= $linkName ?></a>
                                </div>
                                <!-- /.main-content -->
                            </div>
                            <!-- /.col-md-5 -->
                            <div class="col-md-7">
                                <div class="main-image">
                                    <img src="<?= $image ?>" alt="Woman">
                                </div>
                                <!-- /.main-image -->
                            </div>
                            <!-- /.col-md-7 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- <li>
                            <?php //echo wp_get_attachment_image($image, 'full'); 
                            ?>
                            <p><?php //the_sub_field('caption'); 
                                ?></p>
                        </li> -->
                <?php endwhile; ?>

            <?php endif; ?>

        </div>
        <!-- /.main-slider -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main -->

<div class="news">
    <div class="container">
        <div class="news-border">
            <div class="row">
                <div class="col-md-4">
                    <div class="news-card">
                        <span class="news-card__cat">News Release</span>
                        <!-- /.news-card__cat -->
                        <div class="news-card__title">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Explicabo laboriosam mollitia id at veritatis voluptatum quae delectus, quia ducimus ab
                            et sed distinctio vel optio quas nesciunt officiis quam laudantium!</div>
                        <!-- /.news-card__title -->
                        <small class="news-card__date">26 December, 2021</small>
                        <!-- /.news-card__date -->
                    </div>
                    <!-- /.news-card -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="news-card">
                        <span class="news-card__cat">Hot news</span>
                        <!-- /.news-card__cat -->
                        <div class="news-card__title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Porro eveniet sapiente placeat aliquid hic neque cum similique vel earum, ipsa in animi
                            ducimus itaque laborum ratione ab iure tempora dolores.</div>
                        <!-- /.news-card__title -->
                        <small class="news-card__date">24 December, 2021</small>
                        <!-- /.news-card__date -->
                    </div>
                    <!-- /.news-card -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="news-card">
                        <span class="news-card__cat">Latest release</span>
                        <!-- /.news-card__cat -->
                        <div class="news-card__title">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Tenetur assumenda ex minima, maxime expedita voluptatibus cupiditate repudiandae, amet
                            iure totam possimus eligendi quos libero quisquam unde. Ea harum necessitatibus fuga.
                        </div>
                        <!-- /.news-card__title -->
                        <small class="news-card__date">28 December, 2021</small>
                        <!-- /.news-card__date -->
                    </div>
                    <!-- /.news-card -->
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.news-border -->
    </div>
    <!-- /.container -->
</div>
<!-- /.news -->

<section class="values">
    <div class="container">
        <span class="subtitle">Our values</span>
        <!-- /.subtitle -->
        <h2 class="title">Our core<br> values</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="values-side left">
                    <div class="values-side__card">
                        <div class="heading">
                            <h4>Open and respectful <br>cooperation</h4>
                            <i class="icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/carrot-right.svg" alt="Carrot right"></i>
                            <!-- /.icon -->
                        </div>
                    </div>
                    <!-- /.values-side__card -->
                    <div class="values-side__card">
                        <div class="heading">
                            <h4>The details decide <br>everything</h4>
                            <i class="icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/carrot-right.svg" alt="Carrot right"></i>
                        </div>
                        <p>Our work consists of many details, each of which must be thoroughly calculated in order
                            to achieve the best final result. Accuracy is the key to the effectiveness of our work.
                        </p>
                    </div>
                    <!-- /.values-side__card -->
                </div>
                <!-- /.values-side -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="values-side right">
                    <div class="values-side__card">
                        <div class="heading">
                            <h4>Respect, know and surpass <br> your competitor</h4>
                            <i class="icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/carrot-right.svg" alt="Carrot right"></i>
                        </div>
                        <!-- /.heading -->
                        <p>We monitor what is happening in the market and analyze it. If we see that we are lagging
                            behind in something, we look for how to fix it.</p>
                    </div>
                    <!-- /.values-side__card -->
                    <div class="values-side__card">
                        <div class="heading">
                            <h4>Customer<br> loyalty</h4>
                            <i class="icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/carrot-right.svg" alt="Carrot right"></i>
                        </div>
                    </div>
                    <!-- /.values-side__card -->
                </div>
                <!-- /.values-side -->
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.values -->

<section class="brands">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="brands-content">
                    <h2 class="title">Our <span>brands</span></h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, ducimus dolore sit
                        veritatis
                        laboriosam ipsa delectus odio impedit id illum?</p>
                    <div class="brands-nav">
                        <ul>
                            <li class="prev"><img src="<?php bloginfo('template_url'); ?>/assets/img/carrot-left.svg" alt="Slider previous button">
                            </li>
                            <li class="next"><img src="<?php bloginfo('template_url'); ?>/assets/img/carrot-right.svg" alt="Slider next button"></li>
                        </ul>
                        <a href="/UA_DEV/Unicare/brands.html">See all brands</a>
                    </div>
                    <!-- /.brands-nav -->
                </div>
                <!-- /.brands-content -->
            </div>
            <!-- /.col-md-2 -->
            <div class="col-md-9 offset-md-1">
                <div class="brands-list">
                    <div>
                        <div class="brands-list__card">
                            <div class="brand-logo">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/brandlogo/Logo_Naiso.png" alt="Logo naiso" />
                            </div>
                            <!-- /.brand-logo -->
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/brand/brands01.jpg" alt="">
                            <div class="strong">Mello</div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, explicabo?</p>
                            <a class="read-more" href="#">Read more</a>
                            <div class="gray"></div>
                        </div>
                        <!-- /.brands-list__card -->
                    </div>
                    <div>
                        <div class="brands-list__card">
                            <div class="brand-logo">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/brandlogo/Tomono-plus.png" alt="" />
                            </div>
                            <!-- /.brand-logo -->
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/brand/brands02.jpg" alt="">
                            <div class="strong">Tomono Plus</div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <a class="read-more" href="#">Read more</a>
                            <div class="gray"></div>
                        </div>
                        <!-- /.brands-list__card -->
                    </div>
                    <div>
                        <div class="brands-list__card">
                            <div class="brand-logo">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/brandlogo/Logo_Naiso.png" alt="" />
                            </div>
                            <!-- /.brand-logo -->
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/brand/brands01.jpg" alt="">
                            <div class="strong">Mello</div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, explicabo?</p>
                            <a class="read-more" href="#">Read more</a>
                            <div class="gray"></div>
                        </div>
                        <!-- /.brands-list__card -->
                    </div>
                    <div>
                        <div class="brands-list__card">
                            <div class="brand-logo">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/brandlogo/Logo_Naiso.png" alt="" />
                            </div>
                            <!-- /.brand-logo -->
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/brand/brands01.jpg" alt="">
                            <div class="strong">Mello</div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, explicabo?</p>
                            <a class="read-more" href="#">Read more</a>
                            <div class="gray"></div>
                        </div>
                        <!-- /.brands-list__card -->
                    </div>
                    <div>
                        <div class="brands-list__card">
                            <div class="brand-logo">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/brandlogo/Logo_Naiso.png" alt="" />
                            </div>
                            <!-- /.brand-logo -->
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/brand/brands01.jpg" alt="">
                            <div class="strong">Mello</div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, explicabo?</p>
                            <a class="read-more" href="#">Read more</a>
                            <div class="gray"></div>
                        </div>
                        <!-- /.brands-list__card -->
                    </div>
                </div>
                <!-- /.brands-list -->
            </div>
            <!-- /.col-md-9 offset-md-1 -->
        </div>
    </div>
    <!-- /.container-fluid -->

</section>
<!-- /.brands -->

<section class="research">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="research-thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/thumbnail.jpg" alt="Thumbnail">
                    <div class="research-thumbnail__cat">R&D News Release</div>
                    <!-- /.research-thumbnail__cat -->
                </div>
                <!-- /.research-thumbnail -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-5 offset-md-1">
                <div class="research-content">
                    <h2 class="title">Research <br><span>&</span> Development</h2>
                    <!-- /.title -->
                    <p>UniCare Japan conducts research that contributes
                        to the sustainable development of society and enriches the lives
                        of people around the world. We strive to develop a scientific
                        understanding of the essence of technology and generate new
                        ideas through the matrix management of product development
                        research and basic research.
                    </p>
                    <div class="research-content__list">
                        <ul>
                            <li>
                                <small class="date">01 December, 2021</small>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, culpa!</p>
                                <a class="read-more" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/carrot-right.svg" alt="Carrot right"></a>
                            </li>
                            <li>
                            <li>
                                <small class="date">02 December, 2021</small>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <a class="read-more" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/carrot-right.svg" alt="Carrot right"></a>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <!-- /.research-content__list -->
                </div>
                <!-- /.research-content -->
            </div>
            <!-- /.col-md-5 offset-md-1 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.research -->

<section class="who">
    <div class="container">
        <h2 class="title">Who we are</h2>
        <div class="who-list">
            <div class="who-list__card">
                <div class="who-list__card_title">
                    Investor <br> Relations
                    <div class="background-title">
                        <span>IR</span>
                        <span>IR</span>
                        <span>IR</span>
                    </div>
                    <!-- /.background-title -->
                </div>
                <!-- /.who-list_card_title -->
                <div class="who-list__card_desc">Financial & Performance <br> Overview</div>
                <!-- /.who-list__card-desc -->
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/carrot-right.svg" alt="Carrot right"></a>
            </div>
            <!-- /.who-list_card -->
            <div class="who-list__card">
                <div class="who-list__card_title">
                    Investor <br> Relations
                    <div class="background-title">
                        <span>S</span>
                        <span>S</span>
                        <span>S</span>
                    </div>
                    <!-- /.background-title -->
                </div>
                <!-- /.who-list_card_title -->
                <div class="who-list__card_desc">Financial & Performance <br> Overview</div>
                <!-- /.who-list__card-desc -->
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/carrot-right.svg" alt="Carrot right"></a>
            </div>
            <!-- /.who-list_card -->
            <div class="who-list__card">
                <div class="who-list__card_title">
                    Investor <br> Relations
                    <div class="background-title">
                        <span>C</span>
                        <span>C</span>
                        <span>C</span>
                    </div>
                    <!-- /.background-title -->
                </div>
                <!-- /.who-list_card_title -->
                <div class="who-list__card_desc">Financial & Performance <br> Overview</div>
                <!-- /.who-list__card-desc -->
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/carrot-right.svg" alt="Carrot right"></a>
            </div>
            <!-- /.who-list_card -->
        </div>
        <!-- /.who-list -->
    </div>
    <!-- /.container -->
</section>
<!-- /.who -->

<!-- Back to top button -->
<a id="button">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/up-arrow.svg" alt="Icon">
</a>

<?php get_footer(); ?>