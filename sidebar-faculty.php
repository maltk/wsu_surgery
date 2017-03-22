<?php
/**
 * The sidebar for faculty page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WSU_Surgery
 */

?>





    <div class="col-sm-5 col-md-4 sidebar-left">
                <div class="sb-menu">
                    <!--<h2>Faculty</h2>
                    <ul>
                        <li>
                            <a class="btn btn-yellow" href="#">Full-Time</a></li>
                        <li>
                            <a class="btn btn-dark-white" href="#">Full Time Affiliates</a></li>
                        <li><a class="btn btn-dark-white" href="#">Clinical Faculty</a></li>
                        <li><a class="btn btn-dark-white" href="#">Emeritus</a></li>
                        <li><a class="btn btn-dark-white" href="#">Adjunct</a></li>
                        <li><a class="btn btn-dark-white" href="#">Staff</a></li>
                    </ul>-->

                    <?php get_sidebar('faculty'); ?>
                            <?php if ( is_active_sidebar( 'faculty-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'faculty-sidebar' ); ?>
                    <?php else : ?>
                        <p>Time to add some widgets!</p>
                    <?php endif; ?>
                </div>
                <!--<div class="sb-info">
                    <h2>FLS Certified</h2>
                    <p>The Detroit Medical Center, is an official test center for surgeons interested in becoming certified
                        in the fundamentals of laparoscopic surgery.
                    </p>
                </div>-->
            </div>
    
