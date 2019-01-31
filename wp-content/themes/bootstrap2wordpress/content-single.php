<?php
/**
 * @package _s
 */
?>

<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1><?php the_title(); ?></h1>
	<div class="post-details">
		<i class="fas fa-user"></i> <?php the_author(); ?>
		<i class="fas fa-clock"></i> <time><?php the_date(); ?></time>
		<i class="fas fa-folder-open"></i> <?php the_category(', '); ?>
		<i class="fas fa-tags"></i> <?php the_tags(); ?>
	</div><!-- end post details -->
	</header><!-- end header -->


	<div class="post-body">
		<?php the_content(); ?>
	</div><!-- post-body -->


</article><!-- #post-## -->