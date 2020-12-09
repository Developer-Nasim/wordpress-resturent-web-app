<?php
/*
 template name: recipes
*/ 
get_header()?> 

    <!-- -recipy-hero-area start -->
    <div class="recipy-hero-area contact-hero-area hero-area">
        <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-1.png" alt="" class="shape shape-2">
        <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-1.png" alt="" class="shape shape-3">
        <div class="container-fluid position-relative">
        <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-1.png" alt="" class="shape shape-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-title">
                        <h4>Our Product</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h1><?php the_title()?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---recipy- hero-area END -->
 
    <!-- recipy-item-area start -->
        <div class="about-slider recipy-item-area ">
            <img src="<?php echo $site_data['footer-logo']['url']?>" alt="" class="about-logo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center title-border">
                        <div class="recipy-title ">
                        <h1><span>
                        <?php echo $site_data['recepies-title']['1']?></span><?php echo $site_data['recepies-title']['2']?></h1>  
                            <a href="https://www.instagram.com/?url=https://www.drdrop.co/" target="_blank" class="social-logo"> 
                                <img src="<?php echo get_template_directory_uri();?>/./assets/img/logo/instagramlogo.svg" alt="">
                            </a>   
                            <a href="https://www.youtube.com/" class="social-logo youtubelogo">
                                <img src="<?php echo get_template_directory_uri();?>/./assets/img/logo/youtubelogo.svg" alt="">
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="recipy-item-gallery ">
                    <div class="row grid">
                        <?php 
                            $recipes = new WP_Query(array(
                                'post_type'     => 'recipes-item',
                                'posts_per_page'=> -1
                            )); 
                        while($recipes->have_posts()) : $recipes->the_post()?>
                            <div class="col-lg-4 col-md-6 grid-item">
                                <a href="#" title="item-<?php echo get_post_meta(get_the_ID(), 'rec', true,)?>">
                                    <?php the_post_thumbnail()?>
                                    <p><?php the_title()?></p>
                                </a>
                            </div> 
                        <?php endwhile?>    
                    </div>
                </div>
            </div>
        </div>
    <!-- recipy-item-area END -->
 
<?php get_footer()?>