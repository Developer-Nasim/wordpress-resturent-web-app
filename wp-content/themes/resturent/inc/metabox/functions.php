<?php

    function cmbs(array $ourmetabox){
        $ourmetabox[]   = array(
            'id'        => 'first',
            'title'     => 'this all',
            'object_types' => array('recipes-item'),
            'fields'       => array(
                array(
                    'name'      => 'nasim',
                    'type'      => 'text',
                    'id'        => 'rec'
                )
            )
        );
        return $ourmetabox;
    }
    add_filter('cmb2_meta_boxes', 'cmbs')


?>