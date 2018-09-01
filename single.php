<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bulmatypic
 */

get_header();
?>
	<div class="columns">
		<div id="primary" class="column is-9">
			<main id="main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary .is-9 -->
		<div class="column is-3">
				<?php get_sidebar(); ?>
		</div><!-- .is-3 -->
	</div><!-- .columns -->

<?php
get_footer();
