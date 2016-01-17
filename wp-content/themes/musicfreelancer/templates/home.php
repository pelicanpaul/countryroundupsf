<?php
/**
 * Template Name: Home Page
 * Description: Home Page
 */

?>


<?php get_header(); ?>

<style type="text/css">
    /* header */
    .logo {
        max-width: 800px;*/
        margin:  20px auto;

    }
</style>

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






