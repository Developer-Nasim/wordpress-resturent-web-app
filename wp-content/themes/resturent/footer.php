<?php global $site_data;?>
 <!-- footer-area start -->
    <footer>
        <div class="footer-area footer-bg pt-70 pb-30"> 
            <img class="absolute-logo" src="<?php echo $site_data['footer-logo']['url']?>" alt="logo" >
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-md-6">
                        <div class="footer-content">
                            <?php echo $site_data['address']['1']?> <br>
                            <?php echo $site_data['address']['2']?> <br>
                            <?php echo $site_data['address']['3']?> <br> 
                            <a href="mailto:<?php echo $site_data['address']['4']?>"><?php echo $site_data['address']['4']?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area END -->
 
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script> 
    <script src="<?php echo get_template_directory_uri();?>/assets/js/meanmenu.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/nice-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/scrollup.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
    <?php wp_footer()?>
</body>
</html> 