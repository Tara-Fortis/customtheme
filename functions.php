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
    // // menu
    // register_sidebar(array(
    //     'name'          => __('Footer Widget Area Three', 'cmsclass'),
    //     'id'            => 'footer-widget-area-three',
    //     'description'   => __('The third footer widget area', 'cmsclass'),
    //     'before_widget' => '<div class="menu-widget">',
    //     'after_widget'  => '</div>',
    //     'befor_title'   => '<h4 class="widget-title">',
    //     'after_title'   => '</h4>',
    // ));
    // contact information
    register_sidebar(array(
        'name'          => __('Footer Widget Area Four', 'cmsclass'),
        'id'            => 'footer-widget-area-four',
        'description'   => __('The fourth footer widget area', 'cmsclass'),
        'before_widget' => '<div class="contact-widget">',
        'after_widget'  => '</div>',
        'before_title'   => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action( 'widgets_init', 'cmsclass_widgets_init' );
//Custom Plugin
function retro_game_init(){
    // $args in an array called Retro Games
    $args = array(
        'label'             => 'Retro Games',
        'public'            => true,
        'show_ui'           => true,
        'capability_type'   => 'post',
        'taxonomies'        => array( 'category' ),
        'hierarchial'       => false,
        'query_var'         => true,
        'menu_icon'         => 'dashicons-album',
        'supports'          => array(
            'title',
            'editor',
            'excerpts',
            'trackbacks',
            'comments',
            'thumbnail',
            'author',
            'post-formats',
            'page-attributes',
        )
    );
    // registered the post type
    register_post_type('retroGames', $args);
}
add_action('init', 'retro_game_init'); // reference to the function name
// Create our custom shortcode for our custom plugin
function retro_game_shortcodes(){
    $query = new WP_Query(array('post_type' => 'retroGames', 'post_per_page' => 8, 'order => 
    asc'));
    while ($query -> have_posts()) : $query-> the_post();
    // sql statement post_per_page this is how many pages are shown before pagination occurs
    ?>
    <div class="retro-game-container col-sm-12 col-md-6 col-lg-3">
        <div>
            <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <!-- link that contains the first thumbnail (featured image)-->
        <div>
            <h4><?php the_title(); ?></h4>
            <?php the_content(); ?>
            <p><a href="<?php the_permalink(); ?>">Learn More</a></p>
        </div>
        <!-- learn more button -->
    </div>
    <?php wp_reset_postdata(); ?>
    <!-- another WordPress php hook -->
    <?php
    endwhile;
    wp_reset_postdata();
}
// register shortcode
add_shortcode('retroGames', 'retro_game_shortcode');
?>
