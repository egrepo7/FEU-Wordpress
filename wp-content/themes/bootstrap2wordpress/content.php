<?php
/**
 * @package _s
 */
?>

<article class="post col-sm-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card">

		<?php if (has_post_thumbnail() ) { //check for feature image ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div><!-- post-image -->
		<?php } ?>
		
		<div class="card-body post-excerpt">
			<h5 class="card-title"><?php the_title( sprintf( '<h5 class="entry-title card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>
			</h5>
			<p class="card-text"><?php the_excerpt(); ?></p>
			<a href="<?php the_permalink();?>" class="btn btn-primary">Read more</a>
		</div><!-- card-body -->


	</div>
	
</article><!-- #post-## -->
