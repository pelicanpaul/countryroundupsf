<?php
/**
 * Template Name: Search Page
 * Description: Search Page
 */
?>


<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>


<?php get_header(); ?>


	<div id="main">
		<div class="container">




			<?php if ( have_posts() ) : ?>



			<?php endif; ?>
		</div>
	</div>


<?php get_footer(); ?>

