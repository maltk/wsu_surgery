<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WSU_Surgery
 */

?>


	
	<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	

	
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wsu_surgery' ),
				'after'  => '</div>',
			) );
		?>
	


