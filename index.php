<?php
/**
 * The main template file
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (and a style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 */
get_header(); // php hook for the header

// in order to use our featured image we will need to add the function to our function.php and create a variable to collect it here
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); // gets the url of the image, based on the post id, 'full' is the  size of the image
?>
<!-- display the content -->
<section class="post-masthead" style="background: url('<?php echo $featuredImg[0]; ?>')"> <!-- add the link of the featured image as the background for the masthead-->
    <div>
        <h1><?php the_title(); ?></h1> <!-- the title of the page -->
    </div>
</section>
<section class="homepage-content">
    <?php echo get_the_content(); ?> <!-- the body of the page's content-->
</section>

<?php 
get_footer();
?>