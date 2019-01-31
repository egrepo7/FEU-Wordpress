<?php
/*
    Template Name: Home Page
*/

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

// Advanced Custom Fields
$scholarships_awarded   = get_field('scholarships_awarded');
$members                = get_field('members');
$countries              = get_field('countries');
$intro_text           = get_field('intro_text');

$feature_image_1        = get_field('feature_image_1');
$title_1                = get_field('title_1');
$description_1          = get_field('description_1');
$button_link_url_1      = get_field('button_link_url_1');

$feature_image_2        = get_field('feature_image_2');
$title_2                = get_field('title_2');
$description_2          = get_field('description_2');
$button_link_url_2      = get_field('button_link_url_2');

$feature_image_3        = get_field('feature_image_3');
$title_3                = get_field('title_3');
$description_3          = get_field('description_3');
$button_link_url_3      = get_field('button_link_url_3');

$feature_image_4        = get_field('feature_image_4');
$title_4                = get_field('title_4');
$description_4          = get_field('description_4');
$button_link_url_4      = get_field('button_link_url_4');

$more_image_1           = get_field('more_image_1');
$more_title_1           = get_field('more_title_1');
$more_desc_1            = get_field('more_desc_1');
$more_url_1             = get_field('more_url_1');

$more_image_2           = get_field('more_image_2');
$more_title_2           = get_field('more_title_2');
$more_desc_2            = get_field('more_desc_2');
$more_url_2             = get_field('more_url_2');

$more_image_3           = get_field('more_image_3');
$more_title_3           = get_field('more_title_3');
$more_desc_3            = get_field('more_desc_3');
$more_url_3             = get_field('more_url_3');

get_header(); ?>


 <!--============================ HERO ============================ -->
 <!--============================ PAGE FEATURE IMG ============================ -->
<?php if(has_post_thumbnail() ) { // check for feature image ?> 
 
 <section class="feature-img" style="background:url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover;">
    <div class="hero-text">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </div><!-- hero-text -->
</section>
 
 <?php } else { // fallback image ?>
 
 <section class="feature-img">
     <div class="hero-text">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </div><!-- hero-text -->
 </section>
 
 <?php } ?>

    <!--============================ QUICKSTATS ============================ -->

    <section class="quick-stats">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3><?php echo $scholarships_awarded ?></h3>
                    <h4>Scholarships Awarded</h4>
                </div>
                <div class="col-sm-4">
                    <h3><?php echo $members ?></h3>
                    <h4>Members</h4>
                </div>
                <div class="col-sm-4">
                    <h3><?php echo $countries ?></h3>
                    <h4>Countries</h4>
                </div>
            </div>
        </div><!-- quick-stats -->
    </section><!-- quick-stats -->
    
    <!--============================ ABOUT BLURB ============================ -->
    
    <section class="about-blurb">
        <div class="container">
            <p><?php echo $intro_text; ?></p>
        </div><!-- container -->
    </section><!-- about-blurb -->

    <!--============================ DIRECTORY ============================ -->

    <section class="quick-dir">
        <div class="container">
           
            <div class="dir-item">
                <div class="row">
                    <div class="col-sm-6 col">
                        <img src="<?php echo $feature_image_1[url]; ?>" alt="<?php echo $feature_image_1[alt]; ?>">
                    </div><!-- col -->
                    <div class="col-sm-6 d-flex align-items-center">
                        <div class="dir-content">
                            <h2 class="h-style"><?php echo $title_1 ?></h2>
                            <p><?php echo $description_1; ?></p>
                            <a href="<?php echo $button_link_url_1 ?>" class="btn btn-orn btn-xl">READ MORE</a>
                        </div><!-- dir-content -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- dir-item -->

            <div class="dir-item-alt">
                <div class="row">
                    <div class="col-sm-6 d-flex align-items-center col">
                        <div class="dir-content">
                            <h2 class="h-style"><?php echo $title_2 ?></h2>
                            <p><?php echo $description_2; ?></p>
                            <a href="https://<?php echo $button_link_url_2 ?>" class="btn btn-orn btn-xl">JOIN</a>
                        </div><!-- dir-content -->
                    </div><!-- col -->

                    <div class="col-sm-6">
                        <img src="<?php echo $feature_image_2[url]; ?>" alt="<?php echo $feature_image_2[alt]; ?>">
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- dir-item-alt -->

            <div class="dir-item">
                <div class="row">
                    <div class="col-sm-6 col">
                        <img src="<?php echo $feature_image_3[url]; ?>" alt="<?php echo $feature_image_3[alt] ?>">
                    </div><!-- col -->
                    <div class="col-sm-6 d-flex align-items-center">
                        <div class="dir-content">
                            <h2 class="h-style"><?php echo $title_3 ?></h2>
                            <p><?php echo $description_3; ?></p>
                            <a href="https://<?php echo $button_link_url_3 ?>" class="btn btn-orn btn-xl">LEARN MORE</a>
                        </div><!-- dir-content -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- dir-item -->
            
        </div>
    </section><!-- quick-dir -->

    <!--============================ MORE ============================ -->

    <section class="more-todo">
        <h1 class="h-style">More</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="more-option">
                        <a href="https://<?php echo $more_url_1; ?>">
                            <img src="<?php echo $more_image_1[url]; ?>" alt="<?php echo $more_image_1[alt]; ?>">
                            <h3 class="h-style" href="#"><?php echo $more_title_1; ?></h3>
                        </a>
                        <p><?php echo $more_desc_1 ?></p>
                    </div><!-- more-option -->
                </div><!-- col -->

                <div class="col-sm-4">
                    <div class="more-option">
                        <a href="https://<?php echo $more_url_2; ?>">
                            <img src="<?php echo $more_image_2[url]; ?>" alt="<?php echo $more_image_2[alt]; ?>">
                            <h3 class="h-style" href="#"><?php echo $more_title_2; ?></h3>
                        </a>
                        <p><?php echo $more_desc_2 ?></p>
                    </div><!-- more-option -->
                </div><!-- col -->

                <div class="col-sm-4">
                    <div class="more-option">
                        <a href="https://<?php echo $more_url_3; ?>">
                            <img src="<?php echo $more_image_3[url]; ?>" alt="<?php echo $more_image_3[alt]; ?>">
                            <h3 class="h-style" href="#"><?php echo $more_title_3; ?></h3>
                        </a>
                        <p><?php echo $more_desc_3 ?></p>
                    </div><!-- more-option -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- more-todo -->

<?php get_footer(); ?>
