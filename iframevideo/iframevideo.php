<?php
/**
 * Plugin Name: Video Youtube Iframe
 * Plugin URI: https://lahr0809.github.io
 * Description: Inserts a responsive iframe with a youtube video. 
 * Version: 1.0.0
 * Author: Luis Hernandez
 * Author URI: https://lahr0809.github.io
 * License: GPL2
 */
add_shortcode( "yvideo", function($atts, $content){
    $id = $atts['id'];
    return '<div class="responsiveContent"><iframe width="560" height="315" src="https://www.youtube.com/embed/'.$id.'?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
   });
?>