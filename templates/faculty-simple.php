<?php
/**
 * Template Name: Facutly - Simple
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wsu_surgery
 */

get_header(); 

//get_template_part('template-parts/page-title'); 

?>

<!-- Banner -->
    <section class="cp-hero">
        <div class="container">
            <h1>Meeting our Faculty.</h1>
        </div>
    </section>
    <!-- #banner ends -->

    <!-- Main Content -->
    <div class="page-content">
    <div class="container surg-body">
        <div class="row">
            <!-- Sidebar -->
            <?php get_sidebar( 'faculty' ); ?> 
            <!-- End Sidebar -->
            <!-- Main Content Column -->
            <div class="col-sm-7 col-md-8 surg-content faculty">
                <div id="main_content">
                    <div class="row preamble">
                        <div class="col-md-3">
                            <!--<img class="picture" src="src/img/dweaver.jpg" alt="">-->
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            ?>
                                <img class="picture" src="<?php echo the_post_thumbnail_url(); ?>">
                            <?php }
                            ?>
                        </div>
                        <div class="col-md-9">
                            <h1 class="doc-name">
                                <?php the_field( "faculty_name" ); ?>
                            </h1>
                            <div class="pa-info">
                                <div class="col-md-12">
                                    <?php the_field( "faculty_info" ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row trailer">
                        <div class="col-md-12">
                            <h2>About Me</h2>
                            <?php the_field( "faculty_bio" ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
 </div>








            <?php
get_footer();