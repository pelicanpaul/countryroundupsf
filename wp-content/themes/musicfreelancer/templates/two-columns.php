<?php
/**
 * Template Name: Two Columns
 * Description: Tow Column view with a 9 to 3 column layout
 */
?>


<?php get_header(); ?>

		<?php while ( have_posts() ): the_post(); ?>

		<h1><?php the_title() ?></h1>

		<div class="row">
			<div class="col-md-9">

				<?php the_content();?>

			</div>
			<div class="col-md-3 container-sidebar">

				<?php if ( is_active_sidebar( 'primary_sidebar' ) ) : ?>
					<div id="primary_sidebar" class="social" role="complementary">
						<?php dynamic_sidebar( 'primary_sidebar' ); ?>
					</div>
				<?php endif; ?>

			</div>

		</div>
		<?php endwhile; ?>



<?php get_footer(); ?>
