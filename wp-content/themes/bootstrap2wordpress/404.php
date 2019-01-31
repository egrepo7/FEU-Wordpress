<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package _s
 */

get_header(); ?>
	<!--============================ PAGE FEATURE IMG ============================ -->

	 <section class="feature-img">
		<div class="hero-text">
			<h1>Page Could Not Be Found!</h1>
		</div><!-- hero-text -->
	</section>

	<div class="container">

		<div class="row" id="primary">

		<main id="content" class="col-sm-8">

			<div class="error-404 not-found">

				<div class="page-content">

					<h2>Looking for a specific page? </h2>

					<p>Please use the menu on the right side of the page to find what you are looking for. There is also a search bar available.</p>


				</div><!-- page-content -->

			</div><!-- error-404 -->

		</main><!-- content -->

		<aside class="col-sm-4">
			<?php dynamic_sidebar('404-sidebar'); ?>
		</aside>

		</div><!-- rprimary -->

	</div><!-- container -->
	

<?php get_footer(); ?>
