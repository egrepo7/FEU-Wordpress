<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<section id="announcements">
        <div class="container">

			<h1>Announcements</h1>

			<div class="row" id="primary">
				<main id="content" class="col-sm-8" role="main">
					<div class="row">
						<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'content', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php bootstrap2wordpress_paging_nav(); ?>

						<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

						<?php endif; ?>
					</div>
				</main> <!-- content -->	

				<!-- SIDE BAR -->
                <aside class="col-sm-4">
					<?php get_sidebar(); ?>
				</aside>

			</div><!-- primary-->

		</div> <!-- container -->
	</section> <!-- announcemnets -->

	
<?php get_footer(); ?>
