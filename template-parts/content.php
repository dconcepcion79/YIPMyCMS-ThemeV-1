<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
    
        <?php
        if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="featured-thumbnail clearfix">
                <?php the_post_thumbnail(''); ?>
            </a>
            <?php
        }
        ?>
      <header class="entry-header">

            <div class="entry-meta">
                 <?php the_time('M d, Y'); ?>
            </div><!-- .entry-meta -->
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

            <?php if ( 'post' === get_post_type() ) : ?>
            <?php endif; ?>
        </header><!-- .entry-header -->
            <div class="post-content">
            <?php
                the_excerpt( sprintf(
                    /* translators: %s: Name of current post. */
                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ) );
            ?>
            <div class="read-more">
                     <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php _e('Read More...','yiptv'); ?></a>
                        </div>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
