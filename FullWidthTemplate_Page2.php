<?php
/**
template name: FullWidthTemplate_Page2
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div class="banner">
            <img src="<?php echo get_template_directory_uri().'/assets/images/banner.png'?>" >
            </div>
        <div class="container">
        <div class="left-content">
		 <?php
            if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
            elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
            else { $paged = 1; }

            $args = array(
                'post_type' => 'post',
                'paged' => $paged
            );

            // The Query
            query_posts( $args ); 
            if (have_posts()) : while (have_posts()) : the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/content', get_post_format() );
        ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

		<?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
        </div>
        <div class="right-content">
            <?php get_sidebar(); ?>
        </div>
     </div>
        <div class="signup free-membership">
        <div class="container">
             <h2><?php _e('Free membership/no credit card required<a href="#">sign up now!','yiptv'); ?></a></h2>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
