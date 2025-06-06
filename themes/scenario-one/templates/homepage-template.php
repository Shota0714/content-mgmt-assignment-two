<?php
/**
 * Template Name: Homepage Using ACF
 * Template Post Type: page
 */
get_header();
?>
<main>
    <section class="masthead">
        <div>
            <h1><?php echo wp_kses_post(get_field('masthead_title')); ?></h1>
        </div>
    </section>
    <section class="home-intro row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2><?php echo wp_kses_post(get_field('row_one_title')); ?></h2>
            <p><?php echo wp_kses_post(get_field('row_one_text')); ?></p>
        </div>
    </section>
</main>
<?php
get_footer();
?>