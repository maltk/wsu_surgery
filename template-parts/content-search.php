<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WSU_Surgery
 */

?>

<div class="dept-search-result">
	<div class="row">
		<div class="result-title">
			<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</div>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="dept-search-result-date">
			<?php wsu_surgery_posted_on(); ?>
		</div>
		<?php endif; ?>
		<div class="dept-search-result-url">
			<?php echo get_permalink(); ?>
		</div>
		<div class="dept-search-result-snippit">
			<?php the_excerpt(); ?>
		</div>
	</div>
</div>

