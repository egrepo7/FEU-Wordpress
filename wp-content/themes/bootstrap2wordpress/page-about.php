<?php 
/* Template Name: About Page */

get_header(); 

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

$section_title = get_field('section_title');

$purpose_image_1 = get_field('purpose_image_1');
$purpose_heading_1 = get_field('purpose_heading_1');
$purpose_description_1 = get_field('purpose_description_1');

$purpose_image_2 = get_field('purpose_image_2');
$purpose_heading_2 = get_field('purpose_heading_2');
$purpose_description_2 = get_field('purpose_description_2');

$purpose_image_3 = get_field('purpose_image_3');
$purpose_heading_3 = get_field('purpose_heading_3');
$purpose_description_3 = get_field('purpose_description_3');

$purpose_image_4 = get_field('purpose_image_4');
$purpose_heading_4 = get_field('purpose_heading_4');
$purpose_description_4 = get_field('purpose_description_4');

$officer_image = get_field('office_image');
$position_title = get_field('position_title');

?>

<!--============================ PAGE FEATURE IMG ============================ -->
<?php if(has_post_thumbnail() ) { // check for feature image ?> 
 
<section class="page-feature-img" style="background:url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover;"></section>

<?php } else { // fallback image ?>

<section class="page-feature-img"></section>

<?php } ?>

<!--============================ ABOUT BLURB ============================ -->

<section class="content">
<div class="container">
    
    <?php while( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

    <?php $loop = new WP_Query( array( 'post_type' => 'Officers', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>


<div class="purpose">
    <h2 class="h-style"><?php echo $section_title ?></h2>
        
        <div class="row">

            <div class="purpose-icons col-sm-3">
                <img src="<?php echo $purpose_image_1[url]; ?>" alt="<?php echo $purpose_image_1[alt]; ?>">
                <h4><?php echo $purpose_heading_1; ?></h4>
                <p><?php echo $purpose_description_1; ?></p>
            </div><!-- col -->

            <div class="purpose-icons col-sm-3">
                <img src="<?php echo $purpose_image_2[url]; ?>" alt="<?php echo $purpose_image_2[alt]; ?>">
                <h4><?php echo $purpose_heading_2; ?></h4>
                <p><?php echo $purpose_description_2; ?></p>
            </div><!-- col -->

            <div class="purpose-icons col-sm-3">
                <img src="<?php echo $purpose_image_3[url]; ?>" alt="<?php echo $purpose_image_3[alt]; ?>">
                <h4><?php echo $purpose_heading_3; ?></h4>
                <p><?php echo $purpose_description_3; ?></p>
            </div><!-- col -->

            <div class="purpose-icons col-sm-3">
                <img src="<?php echo $purpose_image_4[url]; ?>" alt="<?php echo $purpose_image_4[alt]; ?>">
                <h4><?php echo $purpose_heading_4; ?></h4>
                <p><?php echo $purpose_description_4; ?></p>
            </div><!-- col -->

            
        </div><!-- row -->
    </div><!-- purpose -->

</div>
</section><!-- content -->

<section class="officers">
<div class="container">
    <h2 class="h-style">Officers / Board</h2>

    <div class="row">

        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        
        <?php
            $officer_image = get_field('officer_image');
            $position_title = get_field('position_title');
        ?>

            <div class="officer-profile col-sm-3">
                <img src="<?php echo $officer_image[url]; ?>" alt="<?php echo $officer_image[alt]; ?>">
                
                <h4><?php the_title(); ?></h4>
                <p><?php echo $position_title; ?></p>
            </div><!-- officer-profile -->
        
        <?php endwhile; ?>
        

                
    </div><!-- row -->
</div><!-- container -->
</section>

<?php get_footer(); ?>