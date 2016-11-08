<?php
add_action( 'after_setup_theme', 'slug_post_formats' );
function slug_post_formats() {
    add_theme_support(
        'post-formats', array(
            'video', 'quote', 'link', 'aside',
        )
    );
}
add_post_type_support( 'science', 'post-formats' );