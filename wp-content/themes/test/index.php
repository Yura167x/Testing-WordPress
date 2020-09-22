<?php
get_header();
?>

<header class="container header">

        <nav class="navigation-wrapper">
            <a href="#!">
                <div class="logo">
                    <img width ="35" src="<?php echo get_template_directory_uri()?>./img/logo/logo.png" alt="">
                    <img width ="50" src="<?php echo get_template_directory_uri()?>./img/logo/Waxom.png" alt="">
                </div>
            </a>

            <ul class="navigation">
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Home</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">About Us</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Portfolio</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Features</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Blog</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Pricing</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Shortcodes</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Contact</a>
                </li>
                <li class="icon_cart">
                    <img src="<?php echo get_template_directory_uri()?>./img/logo/icon-cart.png" alt="icon-cart">
                </li>
                <li class="icon_search">
                    <img src="<?php echo get_template_directory_uri()?>./img/logo/icon-search.png" alt="icon-search">
                </li>
            </ul>
        </nav>

        <div class="slide-wrapper">

            <div class="slide-item">
                <div class="slide-item__desc">
                    <h2 class="slide-item__heading">
                        <span>Unique and Modern Desidn</span>
                        Portfolio PSD Template
                    </h2>
                    <div class="slide-item__text">
                        <p>Num liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum</p>
                    </div>
                </div>
                <div class="slide-item__img slide-item__img--bg-1"></div>
            </div>

                <a class="slide-controls__left" href="#">
                    <img src="<?php echo get_template_directory_uri()?>./img/controls/header-slider-left.png" alt="Left"> 
                </a>
                <a class="slide-controls__right" href="#">
                    <img src="<?php echo get_template_directory_uri()?>./img/controls/header-slider-right.png" alt="Right">
                </a>
                <a class="slide-controls-slides" href="#">
                    <img src="<?php echo get_template_directory_uri()?>./img/bottom/01.png" alt="Right">
                    <img src="<?php echo get_template_directory_uri()?>./img/bottom/02.png" alt="Right">
                    <img src="<?php echo get_template_directory_uri()?>./img/bottom/03.png" alt="Right">
                    <img src="<?php echo get_template_directory_uri()?>./img/bottom/04.png" alt="Right">
                    <img src="<?php echo get_template_directory_uri()?>./img/bottom/05.png" alt="Right">
                </a>
                <a class="slide-controls-bottom" href="#">
                    <img src="<?php echo get_template_directory_uri()?>./img/bottom/button.png" alt="Right"> 
                </a>
                <a class="slide-controls-get_started" href="#">
                    <img src="<?php echo get_template_directory_uri()?>./img/bottom/Get Started.png" alt="Right"> 
                </a>
        </div>
    
    </header>

    <section class="quote"> 
        <div class="quote-wrapper">
            <div class="quote__text">
                Our Latest Projects.
            </div>
            <div class="quote__author">Investigationes demonstraverunt lectores legere me lius quod il legunt saepius. Claritas est etiam processus dynamicus,qul sequltur mutatlonem consuetudlum.</div>
        </div>
    </section>

    <ul class="categories">
        <li class="categories__item">
            <a class="categories__link" href="#!">All</a>
        </li>
        <li class="categories__item">
            <a class="categories__link" href="#!">Web Design</a>
        </li>
        <li class="categories__item">
            <a class="categories__link" href="#!">Mobile App</a>
        </li>
        <li class="categories__item">
            <a class="categories__link" href="#!">Ilustration</a>
        </li>
        <li class="categories__item">
            <a class="categories__link" href="#!">Photography</a>
        </li>
    </ul>

    <!--<ul>
        <?php
        
        $args = array(
            'post_type' => 'pictures',
            'publish' => true
        );
        $slider_pictures = get_posts($args);
        foreach ($slider_pictures as $post) {
            include( get_template_directory() .'/content-pictureSlider.php');
        }
    wp_reset_postdata();
    ?>-->
    </ul>

    <section class="shop">
        <div class="container">
            
            <div class="shop-slider">

                <div class="board">
                    <div class="board__img-holder">
                        <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/photo-1.png" alt="Surfing board">
                        <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/Txt-01.png" alt="Surfing board">
                    </div>

            </div>

            <div class="board">
                <div class="board__img-holder">
                    <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/photo-2.png" alt="Surfing board">
                    <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/Txt-02.png" alt="Surfing board">
                </div>
        </div>

        <div class="board">
            <div class="board__img-holder">
                <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/photo-3.png" alt="Surfing board">
                <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/Txt-03.png" alt="Surfing board">
            </div>
    </div>

    </section>

    <section class="shop">
        <div class="container">
            
            <div class="shop-slider">

                <div class="board">
                    <div class="board__img-holder">
                        <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/photo-4.png" alt="Surfing board">
                        <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/Txt-04.png" alt="Surfing board">
                    </div>
            </div>
            <div class="board">
                <div class="board__img-holder">
                    <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/photo-5.png" alt="Surfing board">
                    <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/Txt-05.png" alt="Surfing board">
                </div>
        </div>
        <div class="board">
            <div class="board__img-holder">
                <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/photo-6.png" alt="Surfing board">
                <img class="board__img" src="<?php echo get_template_directory_uri()?>./img/boards/Txt-06.png" alt="Surfing board">
            </div>
    </div>

    </section>

        <div class="bottom-2">

            <a class="slide-controls-bottom-2" href="#">
                <img src="<?php echo get_template_directory_uri()?>./img/bottom/button-2.png" alt="Right"> 
            </a>./
            <a class="slide-controls-load_more" href="#">
                <img src="<?php echo get_template_directory_uri()?>./img/bottom/Load More.png" alt="Right"> 
            </a>

        </div>

        <div class="background-2">
            <a class="background-2_line" href="#">
                <img src="<?php echo get_template_directory_uri()?>./img/3-sl/Background-2.png" alt="Right">
            </a>

            <a class="counters" href="#">
                <img src="<?php echo get_template_directory_uri()?>./img/3-sl/Satisfied Clients.png" alt="Right">
                <img src="<?php echo get_template_directory_uri()?>./img/3-sl/Cups of coffee consumed.png" alt="Right">
                <img src="<?php echo get_template_directory_uri()?>./img/3-sl/Blog Posts.png" alt="Right">
                <img src="<?php echo get_template_directory_uri()?>./img/3-sl/Likes.png" alt="Right">
                <img src="<?php echo get_template_directory_uri()?>./img/3-sl/We Launched.png" alt="Right">
            </a>
        </div>

        <div class="background-3">
            <a class="background-3_line" href="#">
                <img src="<?php echo get_template_directory_uri()?>./img/4-sl/background-3.png" alt="Right">
            </a>

            <a class="counters-4" href="#">
                <img src="<?php echo get_template_directory_uri()?>./img/4-sl/logo-01.png" alt="Right">
                <img src="<?php echo get_template_directory_uri()?>./img/4-sl/logo-02.png" alt="Right">
                <img src="<?php echo get_template_directory_uri()?>./img/4-sl/logo-03.png" alt="Right">
                <img src="<?php echo get_template_directory_uri()?>./img/4-sl/logo-04.png" alt="Right">
            </a>
        </div>
	
<?php
get_footer();