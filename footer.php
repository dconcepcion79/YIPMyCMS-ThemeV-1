<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer class="footer-section text-center">
            <div class="container">
                <a class="page-scroll backToTop" href="#page-top"><i class="fa fa-angle-up"></i></a>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-logo">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/yiptv-logo.png' ?>" alt="">
                            <p><span></span></p>
                        </div>

                        <div class="social-icon clearfix">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>

                        <div class="copyright">
                            <p>&copy; Copright 2015 YipTV - All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

 <!-- Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
