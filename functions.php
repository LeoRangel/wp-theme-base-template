<?php

// Import global CSS files
function my_css() {
    wp_enqueue_style(
        'main', get_template_directory_uri() . '/static/css/main.css',
    );
}
add_action( 'wp_enqueue_scripts', 'my_css' );

// Import global JS files
function my_js() {
    wp_enqueue_script(
        'main', get_template_directory_uri() . '/static/js/main.js'
    );
}
add_action( 'wp_enqueue_scripts', 'my_js' );

// Add Favicon
function add_favicon() {
    echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'/static/images/icons/favicon.png" />';
}
add_action('wp_head', 'add_favicon');

// Enable highlighted image
add_theme_support('post-thumbnails');

// Enable dynamic menus
function register_my_menus(){
    register_nav_menus(
        array(
            'menu-name' => __('Displayed menu name'),
        )
    );
}
add_action('init', 'register_my_menus');

// Max post excerpt size
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 12 );

// Pagination
function pagination_posts($post_type_query){
    echo paginate_links( array(
        'base' => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $post_type_query->max_num_pages,
        'prev_next' => true,
        'prev_text' => "Prev",
        'next_text' => "Next",
        'before_page_number' => '',
        'after_page_number' => '',
        'show_all' => false,
        'mid_size' => 3,
        'end_size' => 1
    ) );
}

// Returns custom post date
function get_custom_post_date(){
    // If post was published today
    if ( get_the_time( 'Yd' ) === current_time( 'Yd' ) ) {
        return get_the_date('\T\o\d\a\y \a\t H:i', strtotime($recent['post_date']));
    } else {
        return get_the_date('d/m/Y \a\t H:i', strtotime($recent['post_date']));
    }
}

// If updated, returns custom post update date
function get_custom_post_modified_time(){
    if (get_custom_post_date() != get_the_time()){
        if (get_custom_post_date('Yd') === current_time( 'Yd' )) {
            if (get_the_time('Yd') === current_time( 'Yd' )) {
                $data_atualizado = get_the_modified_date('\a\t H:i', strtotime($recent['post_date']));
            } else {
                $data_atualizado = get_the_modified_date('\t\o\d\a\y \a\t H:i', strtotime($recent['post_date']));
            }
        } else {
            $data_atualizado = get_the_modified_date('d/m/Y \a\t H:i', strtotime($recent['post_date']));
        }
        return "• Updated " . $data_atualizado;
    }
}

// Custom Post types
// require get_template_directory() . '/custom_post_types/post-type-name.php';

// Custom Fields
// require get_template_directory() . '/custom_fields/field-name.php';  

// Custom Taxonomies
// require get_template_directory() . '/custom_taxonomys/taxonomie-name.php';