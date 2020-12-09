<?php

    // Theme default functions 
    function default_functions() {    
         add_theme_support('menus');
         add_theme_support('widgets');
         add_theme_support('custom-header');
         add_theme_support('custom-background');
         add_theme_support('post-thumbnails');
         add_theme_support('custom-logo');


        //  menus
        register_nav_menu('headermenu', 'Navigetion menu');

        //  RECIPES SLIDER
         register_post_type('recipes', array(
            'public'                    => true,
            'labels'                    => array(
                'name'                 => 'RECIPES slider',
                'add_news'              => 'Add a RECIPES item',
                'all_items'             => 'Here all RECIPES items',
                'add_new_item'          => 'Add a new RECIPES item',
                'featured_image'        => 'Your RECIPES image',
                'set_featured_image'    => 'Add this RECIPES imgage',
                'remove_featured_image' => 'remove this RECIPES imgage',
            ),
            'menu_icon'                 => 'dashicons-carrot',
            'supports'                  => array('title', '', 'thumbnail'), 
         ));

         //  IFRAME SLIDER
         register_post_type('iframe', array(
            'public'                    => true,
            'labels'                    => array(
                'name'                 => 'IFRAMES',
                'add_news'              => 'Add a iframe item',
                'all_items'             => 'Here all iframe items',
                'add_new_item'          => 'Add a new iframe item', 
            ),
            'menu_icon'                 => 'dashicons-admin-site-alt2',
            'supports'                  => array('title', 'editor', ''), 
         ));

         //  Recipes item
         register_post_type('recipes-item', array(
            'public'                    => true,
            'labels'                    => array(
                'name'                  => 'Recipes Item',
                'add_news'              => 'Add a Recipes item',
                'all_items'             => 'Here all Recipes items',
                'add_new_item'          => 'Add a new Recipes item... ( you have to add a title featured image and a id )', 
                'featured_image'        => 'Here is the item Image',
                'set_featured_image'    => 'Add a recipes imgage',
                'remove_featured_image' => 'remove this recipes imgage',
            ),
            'menu_icon'                 => 'dashicons-buddicons-topics',
            'supports'                  => array('title', '', 'thumbnail'), 
         ));

         //  Contact form
         register_post_type('contacts', array(
            'public'                    => true,
            'labels'                    => array(
                'name'                  => 'Contact form', 
                'all_items'             => 'Here all Contact items',
                'add_new_item'          => 'Add a new Contact item...  ',  
            ),
            'menu_icon'                 => 'dashicons-phone',
            'supports'                  => array('title', 'editor', ''), 
         ));



    }
    add_action( 'after_setup_theme', 'default_functions' );

    // Meta-box functions
        function custom_meta_boxes(){
            add_meta_box(
                'fiirst-meta',
                'Hello',
                'jmg',
                'recipes-item',
                'side', // normal, advanced, side
                'high',  //  high, core, default , low
            );
        }
        add_action('add_meta_boxes', 'custom_meta_boxes');

        function jmg(){
            echo "nasim";
        } 
    require_once('inc/ReduxCore/framework.php');
    require_once('inc/sample/sample-config.php');
    require_once('inc/metabox/init.php');
    require_once('inc/metabox/functions.php');
?>