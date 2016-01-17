<?php get_header(); ?>

<div>

    <?php while(have_posts()): the_post() ?>


        <?php
        // check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
        the_post_thumbnail();
        }
        the_content();?>

    <?php endwhile; ?>

<?php get_sidebar();?>

</div>
<?php get_footer(); ?>

