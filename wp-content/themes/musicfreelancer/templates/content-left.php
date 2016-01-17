<?php
/**
 * Template Name: Content Left
 * Description: Two Column view with a 6 to 6 column layout
 */
?>


<?php get_header(); ?>



	<?php while ( have_posts() ): the_post(); ?>
		<div class="row">
			<div class="col-md-6">
				<div class="feature-box">
				<?php the_content();?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>

<?php get_footer(); ?>
