<?php get_header(); ?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php get_template_part('includes/breadcrumbs'); ?>
            </div>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-md-6 text-block">
    <img width="825" height="510" src="http://localhost:85/wp-content/uploads/2015/01/background-pattern-dark.jpg" class="attachment-post-thumbnail wp-post-image" alt="kai-slides-06">

    <?php while(have_posts()): the_post() ?>



        <h2 class="red"><?php the_title()?></h2>
        <?php the_content(__('Continue Reading'))?>

        <?php //comments_template(); ?>

    <?php endwhile; ?>

    </div>
    <div class="col-md-6 ">




        <?php if ( is_active_sidebar( 'primary_sidebar' ) ) : ?>
            <div  class="sidebar" role="complementary">
                <?php dynamic_sidebar( 'primary_sidebar' ); ?>
            </div>
        <?php endif; ?>
   </div>
</div>


<?php get_footer(); ?>

