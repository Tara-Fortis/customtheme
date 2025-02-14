<?php
function my_theme_setup(){
    // register the navigation using a prebuilt php hook
    register_nav_menus( array(
        'header'  => 'Header menu',
        'footer'  => 'Footer menu'
    ));
} 
// the action will make the navigation work
add_action('after_setup_theme', 'my_theme_setup');
// add featured image support to our posts
add_theme_support ('post-thumbnails');

function cmsclass_widgets_init(){
// name of the function is up to you
// logo
    register_sidebar(array(
        'name'          => __('Footer Widget Area One', 'cmsclass'),
        'id'            => 'footer-widget-area-one',
        'description'   => __('The first footer widget area', 'cmsclass'),
        'before_widget' => '<div class="logo-widget">',
        'after_widget'  => '</div>',
    ));
    // about text
    register_sidebar(array(
        'name'          => __('Footer Widget Area Two', 'cmsclass'),
        'id'            => 'footer-widget-area-two',
        'description'   => __('The second footer widget area', 'cmsclass'),
        'before_widget' => '<div class="copyright-widget">',
        'after_widget'  => '</div>',
        'before_title'   => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget Area Four', 'cmsclass'),
        'id'            => 'footer-widget-area-four',
        'description'   => __('The fourth footer widget area', 'cmsclass'),
        'before_widget' => '<div class="contact-widget">',
        'after_widget'  => '</div>',
        'before_title'   => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    add_theme_support( 'widgets' );
}
add_action( 'init','cmsclass_widgets_init');
// Custom plugin "Learning Log"
function learning_log(){
    $args = array(
        'label'             => 'Learning Log',
        'public'            => true,
        'show_ui'           => true,
        'capability_type'   => 'post',
        'taxonomies'        => array ( 'category' ),
        'hierarchial'       => false,
        'menu_icon'         => 'dashicons-book',
        'supports'          => array(
            'title',
            'editor',
            'excerpts',
            'thumbnail',
            'author',
            'post-formats',
            'page-attributes',
        )
    );
    register_post_type('learning_log', $args);
}
add_action('init', 'learning_log');
?>
<?php
// Custom shortcode for "Learning Log"
function learning_log_shortcode(){
    $query = new WP_Query(array('post_type' => 'learningLog', 'post_per_page' => 2, 'order => 
    asc'));
    while ($query -> have_posts()) : $query-> the_post();
?>
<div>
    <div>
        <p><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a></p>
    </div>
    <div>
        <h1><?php the_title(); ?></h1>
        <section><?php echo get_the_content(); ?></section>
        <p><a href="<?php the_permalink(); ?>">Learn More</a></p>
    </div>
</div>
</div>
<?php wp_reset_postdata(); ?>
<!-- another WordPress php hook -->
<?php
endwhile;
wp_reset_postdata();
}
// register shortcodex
add_shortcode('learningLog', 'learning_log_shortcode');
?>