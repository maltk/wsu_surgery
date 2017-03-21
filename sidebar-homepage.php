<?php
/**
 * The sidebar for frontpage
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WSU_Surgery
 */

?>





    
    <div class="col-sm-5 col-sm-pull-7 col-md-4 col-md-pull-8 sidebar-home">
        <div class="dept-info">
            <?php get_sidebar('homepage'); ?>
                    <?php if ( is_active_sidebar( 'homepage-sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'homepage-sidebar' ); ?>
            <?php else : ?>
                <p>Time to add some widgets!</p>
            <?php endif; ?>
        </div>
       <!--<div class="dept-twitter">
            <h2>Twitter Feed</h2>
            <p>Keep your followers engaged. Share quality content, even while you are away from Twitter.</p>
            <div class="footer">
                <p>10:46 PM - 6 Jan 2017</p>
            </div>
        </div>-->
    </div>
    
