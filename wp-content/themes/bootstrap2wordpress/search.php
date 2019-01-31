<?php
/**
 * The template for displaying search results pages.
 *
 * @package _s
 */

get_header(); ?>

	<section style="margin-top: 150px;">
		<div class="container">
			<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'bootstrap2wordpress' ), '<span style="font-size: 28px;">' . get_search_query() . '</span>' ); ?></h2>
		</div> <!-- container --> 
	
			
		<div class="container">
			<div id="primary" class="row">

			<main id="content" class="col-sm-8">
				<div class="row">
					<?php if ( have_posts() ) : ?>

						

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'content', 'search' );
							?>

						<?php endwhile; ?>

						<?php bootstrap2wordpress_paging_nav(); ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>
				</div><!-- row -->
			</main><!-- main -->

			<aside class="col-sm-4">
				<?php get_sidebar(); ?>	
			</aside><!-- aside -->

			</div><!-- primary -->
		</div><!-- container -->



<?php get_footer(); ?>
