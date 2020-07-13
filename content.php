<?php
/**
 * @package Memberlite
 */
global $memberlite_defaults;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php // Show the featured image
if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'full', array( 'class' => 'words-featured-image' ) );
}
?>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php 
			do_action( 'before_content_archive' );
			$content_archives = get_theme_mod('content_archives'); 
			if($content_archives == 'excerpt')
				the_excerpt();
			else
				the_content(); 
		?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'memberlite' ),
				'after'  => '</div>',
			) );
		?>
		<div class="clear"></div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php do_action( 'after_content_archive' ); ?>
		<?php edit_post_link( __( 'Edit', 'memberlite' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->