<?php 
/* Template Name: Community Outreach Page */

get_header(); 


?>



<section id="education">
        <div class="container">

            <div class="alt-content">
               <h1 class="cont-title"><?php echo the_title(); ?></h1>
                
               <?php while( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; wp_reset_query();?>
            </div><!-- education-content -->
        </div><!-- container -->
</section><!-- education -->


<?php get_footer(); ?>

<?php get_footer(); ?>