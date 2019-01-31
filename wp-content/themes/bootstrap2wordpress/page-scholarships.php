<?php 
/* Template Name: Scholarships Page */

get_header(); 

$scholarship_intro      =   get_field('scholarship_intro');
$scholar_pledge_info    =   get_field('scholar_pledge_info');
$scholar_pledge_form    =   get_field('scholar_pledge_form');
$excellence_intro   =   get_field('excellence_intro');

$file_image =   get_field('file_image');
$file_name =   get_field('file_name');
$file_upload =   get_field('file_upload');
$excellence_table = get_field('excellence_table');
?>



<!--============================ PAGE FEATURE IMG ============================ -->

<section class="page-feature-img">

</section>

<!--============================ ABOUT BLURB ============================ -->

<section class="content">
<div class="container">
    <p><?php echo $scholarship_intro ?></p>



<div class="purpose">
    <h2 class="h-style">Information Downloads</h2>
        
        <div class="row">

            <?php $loop = new WP_Query( array( 'post_type' => 'scholarship-download', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

             <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            
            <?php
                $file_image =   get_field('file_image');
                $file_name =   get_field('file_name');
                $file_upload =   get_field('file_upload');
            ?>


                 <div class="document-icons col-sm-3">
                    <img src="<?php echo $file_image[url]; ?>" alt="<?php echo $file_image[alt]; ?>">
                    <h4><?php the_title(); ?></h4>
                    <a  target="_blank" class="btn btn-primary" href="<?php echo $file_upload[url] ?>">Download</a>
                </div><!-- col -->
            
            <?php endwhile; wp_reset_query(); ?>


            
        </div><!-- row -->
    </div><!-- purpose -->

</div>
</section><!-- star -->

<section class="award-form">
<div class="container">
    <h2 class="h-style">Scholarship / Award Pledge Form</h2>
    <?php echo $scholar_pledge_info ?>
    <?php echo $scholar_pledge_form ?>

</div><!-- container -->
</section><!-- award-form -->

<section class="scholars">
<div class="container">

    <h1 class="h-style">Scholars</h1>
    <div class="row">

        <?php $loop = new WP_Query( array( 'post_type' => 'scholars', 'orderby' => 'post_id', 'order' => 'DSC' ) ); ?>

        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php
            $scholars_photo =   get_field('scholars_photo');
            $scholars_award =   get_field('scholars_award');
            $academic_time =   get_field('academic_time');
            $side_note  =   get_field('side_note');
        ?>

        <div class="scholar col-sm-6">
            <img class="img-fluid" src="<?php echo $scholars_photo[url]; ?>" alt="<?php echo $scholars_photo[alt]; ?>">
            <h4><?php the_title(); ?></h4>
            <p>Award: <?php echo $scholars_award ?> | <?php echo $academic_time ?></p>
            <p><?php echo $side_note ?></p>
        </div><!-- scholar -->

        <?php endwhile; wp_reset_query(); ?>

        


        
    </div><!-- row -->

</div><!-- container -->
</section><!-- scholars -->

<section class="excellence-awards">
<h1 class="h-style">Excellence Awards</h1>
<div class="container">
    <?php echo $excellence_intro ?>
    <?php echo $excellence_table ?>
    <

</div><!-- contianer -->
</section><!-- excellence-awards -->

<?php get_footer(); ?>