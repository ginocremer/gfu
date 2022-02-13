<?php
// Standard-Qualität der Mediathek on 80 auf 100 erhöhen = Kompression verringern / Dateigewicht erhöhen

add_filter('jpeg_quality', function($arg){return 100;});


// Body Classes filtern und erweitern

if ( ! function_exists( 'body_class_section' ) ):
    function body_class_section($classes) {
        global $wpdb, $post;
        if (is_page()) {
            if ($post->post_parent) {
                $ancestors = get_post_ancestors($post->ID);
                $parent  = end($ancestors);
            } else {
                $parent = $post->ID;
            }
            $post_data = get_post($parent, ARRAY_A);
            $level = count($post->ancestors)+1;
            $classes[] = 'parent-' . $post_data['post_name'];
            $classes[] = 'level-' . $level;
        }
        return $classes;
    }
    add_filter('body_class','body_class_section');
endif;
