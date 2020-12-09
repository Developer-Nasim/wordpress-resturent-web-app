<?php global $site_data;?>
<?php 
/*
    template name: Home
*/ 
get_header()?>
    <!-- hero-area start -->
    <div class="hero-area">
        <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-1.png" alt="" class="shape shape-1">
        <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-2.png" alt="" class="shape shape-2">
        <div class="container-fluid">
            <div class="hero-slider">
                <?php
                $hero = $site_data['HERO-slider'];
                foreach ($hero as $h_slider) {
                    echo '<div class="hero-single-slider black-slider">
                    <div class="container">
                        <div class="hero-title pt-150">
                            <h4>Our Product</h4>
                        </div>
                        <div class="row align-items-lg-center fix-slider-height">
                            <div class="col-lg-4 offset-lg-2">
                                <div class="hero-content">
                                    <h1>'.$h_slider['title'].'<span>'.$h_slider['description'].'</span></h1>
                                    <p>'.$h_slider['height'].'</p>
                                    <h3>'.$h_slider['width'].'</h3>
                                    <a href="'.$h_slider['url'].'" class="bordered-btn">MORE INFO</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="heo-img">
                                    <img src="'.$h_slider['image'].'" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?> 
            </div>
        </div>
    </div>
    <!-- hero-area END -->


    <!-- about-slider-area start -->
    <div class="about-slider section-border-bottom">
        <div class="row absolute-shape-area">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-3.png" alt="" class="about-shape about-top-shape-1">
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-3.png" alt="" class="about-shape about-top-shape-2">
            </div>
        </div>
        <img src="./assets/img/logo/about-logo.png" alt="" class="about-logo">
        <div class="abour-slider-activer">  
            
            <?php 
                $about_slider  =   $site_data['about-slider'];
                foreach($about_slider as $all_about){
                    echo '<div class="about-single-slider pt-250 pb-60">
                    <div class="container-fluid">
                        <div class="about-slider-img" style="background: url('.$all_about['image'].');background-size: cover;background-position: center;"></div>
                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <div class="about-text text-center">
                                    <h2>'.$all_about['title'].'</h2>
                                    <p>'.$all_about['description'].'</p>
                                    <a href="'.$all_about['url'].'" class="bordered-btn gray-border-btn">Watch video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> ';
                }
             ?>
        </div>
    </div>
    <!-- about-slider-area END -->


    <!-- recipy-area start -->
    <div class="recipy-area pt-20 pb-130 gray-bg section-border-bottom">
        <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-1.png" alt="" class="recipy-shape recipy-shape-1">
        <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-1.png" alt="" class="recipy-shape recipy-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="recipy-title text-center pb-50">
                        <h1><span><?php echo $site_data['recepies-title']['1']?></span><?php echo $site_data['recepies-title']['2']?></h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-center user-border-bottom">
                <div class="col-md-1">  
                    <a href="https://www.instagram.com/?url=https://www.drdrop.co/" target="_blank" rel="noopener"> 
                        <img src="<?php echo get_template_directory_uri();?>/./assets/img/logo/instagramlogo.svg" alt="">
                    </a> 
                </div>
                <div class="col-md-10">
                    <div class="user-area"> 
                        <?php 
                        $recipes = new WP_Query(array(
                            'post_type'         => 'recipes',
                            'posts_per_page'    => -1
                        ));
                        while($recipes->have_posts()) : $recipes->the_post();?>
                            <div class="single-user">
                                <a href="">
                                    <?php the_post_thumbnail()?>
                                    <p><?php the_title()?></p>
                                </a>
                            </div> 
                        <?php endwhile?>
                    </div>
                </div>
            </div>
            <div class="row align-items-center pt-30">
                <div class="col-md-1"> 
                    <a href="https://www.youtube.com" target="_blank" class="social-logo">
                        <img src="<?php echo get_template_directory_uri();?>/./assets/img/logo/youtubelogo.svg" alt="">
                    </a> 
                </div>
                <div class="col-md-8 offset-md-1">
                    <div class="play-box-activer"> 
                        <?php 
                        $iframs = new WP_Query(array(
                            'post_type'         => 'iframe',
                            'posts_per_page'    => -1
                        ));
                        while($iframs->have_posts()) : $iframs->the_post();?> 
                            <div class="single-play-box">
                                <div class="play-box">
                                    <?php the_content()?>
                                    <p><?php the_title()?></p>
                                </div>
                            </div> 
                        <?php endwhile?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recipy-area END -->
 
<?php get_footer()?>