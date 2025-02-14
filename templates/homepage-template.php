<?php
/**
 * Template Name: Homepage Using ACF
 * Template Post Type: page
 */
get_header();
?>
<main>
<!-- this uses the feild labels from acf editor to place the content on the page-->
    <div class="container-fluid">
        <section class="masthead" style="background-image: url('<?php echo wp_kses_post(get_field ('masthead_image'));?>')">
            <div>
                <h1><?php echo wp_kses_post(get_field('masthead_title'));?></h1>
            </div>
        </section>
        <section class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2><?php echo wp_kses_post(get_field('row_one_title')); ?></h2>
                <p><?php echo wp_kses_post(get_field('row_one_text')); ?></p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2><?php echo wp_kses_post(get_field('row_two_title')); ?></h2>
                <p><?php echo wp_kses_post(get_field('row_two_text')); ?></p>
                <img src="<?php echo wp_kses_post(get_field('row_two_image')); ?>" class="widget-image">
            </div>
        </section>
        <section class="custom-plugin-section row">
            <?php echo do_shortcode('[retroGames]'); ?>
        </section>
    </div>
</main>
<?php
get_footer();
?>
<!-- Make sure your template name does not contain "template"
 post type can be a page or a post-->
