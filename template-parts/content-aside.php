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
	<div class="entry-content">
		<div class="aside">
			<?php
		 		the_content();
		 		$byline = sprintf(
				/* translators: %s: post author. */
				esc_html_x( 'Written by %s', 'post author', 'simurgh' ),
				'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
				 );
				echo '<div class="aside-by"';
		 		echo '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
				echo '<i class="fa fa-pencil-square-o aside-post" aria-hidden="true"></i>'; // Display a pencil icon in the bottom right
				echo '<div>' 
			?>
		</div>
	</div><!-- .entry-content -->
  </div><!-- .index-box -->
</article><!-- #post-<?php the_ID(); ?> -->



		
