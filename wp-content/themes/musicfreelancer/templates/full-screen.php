<?php
/**
 * Template Name: Full Screen
 * Description: Full screen view for store locator and other large pages
 */
?>


<?php get_header(); ?>


<div class="full-screen">
	<?php while ( have_posts() ): the_post(); ?>
		<?php the_content();?>
	<?php endwhile; ?>
</div>


<?php get_footer(); ?>

