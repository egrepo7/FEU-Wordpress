<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	
<?php wp_footer(); ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <?php

                    wp_nav_menu( array( 
                        'theme_location'	=> 'footer',
                        'depth'				=> '2',
                        'container'			=> 'nav',
                        'menu_class'		=> 'list-unstyled',
                        'fallback_cb'		=> 'wp_bootstrap_navwalker::fallback',
                        'walker'			=> new wp_bootstrap_navwalker(),
                    ) );
                    
                ?>
            </div><!-- end col -->

            <div class="col-sm-4">
                <div class="footer-social-media">
                    <h5>Social Media</h5>
                    <a href="https://www.facebook.com/FEU.NRMFmtias">
                        <i class="fab fa-facebook fa-4x"></i>
                    </a>
                </div><!-- footer-social-media -->
            </div>

            <div class="col-sm-4">
                <div class="footer-blurb">
                    <h5>FEU-NRMF International Alumni Society</h5>
                    <p>Focusing on bringing together all graduates into one cohesive group in order to further our profession and help in the building of a healthier world.</p>
                </div>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

</footer>
<section class="footer-copyright">
    <h5><?php bloginfo('the_title'); ?> <br> &copy; Edgar Grepo Design <?php echo date('Y'); ?></h5>
</section><!-- footer-copyright -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>


</body>
</html>
