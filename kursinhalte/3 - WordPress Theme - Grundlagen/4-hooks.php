<?php 

// Eigene Javascript- und CSS-Dateien via Hook einbinden 

function mycustomscripts() {
  wp_enqueue_style( 'eigenes-css', get_stylesheet_directory_uri() . '/css/mycss.css', array(), '1.0', 'all' );
  wp_enqueue_script( 'eigenes-js', get_stylesheet_directory_uri() . '/js/myscript.js', array( 'jquery' ), '1.0', true );
}				
add_action( 'wp_enqueue_scripts', 'mycustomscripts' );


// Eigenes Inline-Javascript in den Footer setzen lassen

function myinlinejs() {
    echo '<script></script>';
}
add_action( 'wp_footer', 'myinlinejs', 100 );
