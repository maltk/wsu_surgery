<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WSU_Surgery
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-md-4 sidebar">

    <?php do_action( 'before_sidebar' ); ?>

    <?php
    $sidebar = get_field('select_a_sidebar');
    if($sidebar != 'none'){
        dynamic_sidebar($sidebar);
    };
    ?>

    <?php do_action( 'after_sidebar' ); ?>


    <?php //dynamic_sidebar( 'sidebar-1' ); ?>
</div>
