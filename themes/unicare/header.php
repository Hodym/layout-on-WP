<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Unicare — Natural & Safe</title> -->

    <?php wp_head(); ?>

</head>

<body>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-2">
                    <div class="header-logo">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="Logo"></a>
                    </div>
                    <!-- /.header-logo -->
                </div>
                <!-- /.col-md-2 -->
                <div class="d-none d-md-block d-lg-block d-xl-block col-md-6">
                    <?php wp_nav_menu([
                        'theme_location'  => 'top_menu',
                        'container'       => 'nav',
                        'container_class'      => 'header-nav'
                    ]); ?>
                    <!-- /.header-nav -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-6 col-md-4">
                    <div class="header-info">
                        <div class="header-info__search">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/search.svg" alt="Search icon">
                        </div>
                        <!-- /.header-info_search -->
                        <div class="header-info__lang">
                            English
                            <i class="icon">
                                <img class="select-arrow" src="<?php bloginfo('template_url'); ?>/assets/img/select-arrow.svg" alt="Arrow down">
                            </i>
                            <!-- /.icon -->
                        </div>
                        <!-- /.header-info_lang -->
                        <div class="button_container" id="toggle">
							<span class="top"></span>
							<span class="middle"></span>
							<span class="bottom"></span>
						</div>
                    </div>
                    <!-- /.header-info -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <!-- /.header -->

    <div class="overlay" id="overlay">
        <?php wp_nav_menu([
            'theme_location'  => 'top_menu',
            'container'       => 'nav',
            'menu_class' => 'overlay-menu'
        ]); ?>
    </div>
    