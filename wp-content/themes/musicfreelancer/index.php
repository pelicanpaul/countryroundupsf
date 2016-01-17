<?php get_header(); ?>

<div class="row">
    <div class="col-md-6">
        <div class="feature-box">


        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'includes/content', get_post_format() ); ?>
            <?php endwhile; ?>
            <?php if (function_exists("pagination")) { ?>
                <?php pagination(); ?>
            <?php } else {
                posts_nav_link(' &#183; ', 'previous page', 'next page');
            } ?>
        <?php endif; // end have_posts() check ?>

    <?php get_sidebar();?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

