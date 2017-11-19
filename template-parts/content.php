<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simurgh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="index-box">
	<?php 
    	if (has_post_thumbnail()) {
			echo '<div class="single-post-thumbnail clear">';
			echo '<a href="' . get_permalink() . '" title="' . __('Click to read ', 'simurgh') . get_the_title() . '" rel="bookmark">';
			echo the_post_thumbnail('index-thumb');
			echo '</a>';
        	echo '</div>';
    	}
	?>       

	<header class="entry-header">

	<?php

		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

	 ?>
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	
	<footer class="entry-footer continue-reading">
		<?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading ', 'simurgh') . get_the_title() . '" rel="bookmark">Continue Reading<i class="fa fa-arrow-circle-o-right"></i></a>'; ?>
	</footer><!-- .entry-footer -->	
  </div><!-- .index-box -->
</article><!-- #post-<?php the_ID(); ?> -->
