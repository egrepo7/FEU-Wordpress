<?php 
/* Template Name: Membership Page */

get_header(); 

$membership_intro   =   get_field('membership_intro');
$how_to_apply   =   get_field('how_to_apply');
$payment_options   =   get_field('payment_options');
$membership_form    =  get_field('membership_form');

?>

<section id="membership">
    <div class="container">

        <h1><?php echo the_title(); ?></h1>

    

        <div id="primary">

            <?php echo $membership_intro ?>

            <div class="member-details">
                <div class="row">
                    <div class="apply col-sm-6">
                        <h4>How to Apply</h4>
                        <?php echo $how_to_apply ?>
                    </div><!-- apply-options -->
                        
                    <div class="pay-options col-sm-6">
                        <h4>Payment Options</h4>
                        <?php echo $payment_options ?>
                    </div><!-- pay-options -->
                </div><!-- row -->
            </div><!-- member-details -->

            <?php echo $membership_form ?>
        </div><!-- end primary -->

        


        
            

        

    </div><!-- container -->
</section><!-- section -->


<?php get_footer(); ?>