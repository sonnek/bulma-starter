<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bulmatypic
 */

get_header();
?>
	<div class="columns">
		<div id="primary" class="column is-9">
			<main id="main">

			<?php if ( have_posts() ) : ?>

				<header>
					<h1>
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'bulmatypic' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</main><!-- #main -->
		</div><!-- #primary .is-9 -->
		<div class="column is-3">
				<?php get_sidebar(); ?>
		</div><!-- .is-3 -->
	</div><!-- .columns -->

<?php
get_footer();

