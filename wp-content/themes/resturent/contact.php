<?php 
/*
    template name: Contact
*/ 
get_header()?> 


    <!-- -contact-hero-area start -->
    <div class="contact-hero-area hero-area">
        <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-1.png" alt="" class="shape shape-1">
        <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-2.png" alt="" class="shape shape-2">
        <div class="container-fluid">
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
                        <h1><?php the_title()?> <span>US</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---contact- hero-area END -->


    <!-- contact-area start -->
    <div class="bg-section-area">
        <div class="about-slider contact-area">
            <div class="row absolute-shape-area">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-3.png" alt="" class="about-shape about-top-shape-1">
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-3.png" alt="" class="about-shape about-top-shape-2">
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri();?>/./assets/img/logo/about-logo.png" alt="" class="about-logo">
            <div class="contact-form-wrapper">
                <div class="container">
                    <div class="bg-bordered-form">
                        <div class="row text-center justify-content-center">
                            <div class="col-md-6">
                                <div class="contact-form-title">
                                    <?php if($site_data['Contact-title']['1']) : ?>
                                        <h3><span><?php echo $site_data['Contact-title']['1']?></span><?php echo $site_data['Contact-title']['2']?></h3>
                                        <p><?php echo $site_data['Contact-title']['3']?></p>  
                                    <?php endif?>    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="address-info">
                                    <div class="address-info-item">
                                        <div class="address-text">
                                            <?php if($site_data['info-one']['1']) : ?>
                                                <h6><?php echo $site_data['info-one']['1']?></h6>
                                                <p><?php echo $site_data['info-one']['2']?></p>
                                            <?php endif?>    
                                        </div>
                                        <div class="address-icon">
                                            <i class="fas fa-mobile-android-alt"></i>
                                        </div>
                                    </div>
                                    <div class="address-info-item">
                                        <div class="address-text">
                                            <?php if($site_data['info-two']['1']) : ?>
                                                <h6><?php echo $site_data['info-two']['1']?></h6>
                                                <p><?php echo $site_data['info-two']['2']?></p>
                                            <?php endif?>     
                                        </div>
                                        <div class="address-icon">
                                            <i class="far fa-map-marker-alt"></i>
                                        </div>
                                    </div>
                                    <div class="address-info-item">
                                        <div class="address-text"> 
                                            <?php if($site_data['info-three']['1']) : ?>
                                                <h6><?php echo $site_data['info-three']['1']?></h6>
                                                <p><?php echo $site_data['info-three']['2']?></p>
                                            <?php endif?>    
                                        </div>
                                        <div class="address-icon">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8"> 
                                <?php 
                                    $contacts   =  new WP_Query(array(
                                        'post_type'         => 'contacts',
                                        'posts_per_page'    => 1
                                    ));
                                while($contacts->have_posts()) : $contacts->the_post()?>
                                    <?php the_content()?>
                                <?php endwhile?>    
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-1.png" class="contact-shape contact-shape-3" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/./assets/img/Shape/shape-1.png" class="contact-shape contact-shape-4" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/./assets/img/slider/slider-2.png" class="contact-shape contact-shape-5" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- contact-slider-area END -->

<?php get_footer()?>