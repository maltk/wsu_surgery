<?php
/**
 * The front page template file.
 *
 * @package WSU_Surgery
 */

get_header(); 

//get_template_part( 'template-parts/homepage-banner' );

putRevSlider("news-gallery3");
?>

    <!-- Main Content -->
    <div class="page-content">
        <div class="container surg-body">
            <div class="row">
                <!-- Main Content Column -->
                <div class="col-sm-7 col-sm-push-5 col-md-8 col-md-push-4 main-content">
                    <section class="chairman-msg clearfix">
                        
                        
                        <?php the_field( "hp_primary_content" ); ?>
                    </section>
                    <section class="featured-resident clearfix">
                        <?php the_field( "hp_secondary_content" ); ?>
                    </section>
                    <!-- Department Events -->
                    <section class="dept-events clearfix">
                        <h1>Department Updates and Events</h1>
                        <?php
                        global $post;
                        $args = array( 'posts_per_page' => 4, 'category' => 1 );
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) :
                        setup_postdata( $post ); ?> 
                            <div class="event">
                                <div class="col-sm-4 col-md-2 event-image">
                                    <div class="outline">
                                        <?php
                                        if ( has_post_thumbnail() ) { 
                                            // check if the post has a Post Thumbnail assigned to it.
                                        ?>
                                            <img src="<?php the_post_thumbnail_url(); ?>" >
                                        <?php } else { ?>
                                            <img class="default-post-icon" src="<?php echo get_template_directory_uri(); ?>/img/wsu-logo.png" alt="">
                                        <?php
                                            } 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-10 meta">
                                    <h2><a class="event-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <span><?php the_date(); ?></span>
                                </div>
                            </div>
                        <?php
                        endforeach; 
                        wp_reset_postdata();
                        ?>
                        <div class="row">
                            <div class="col-md-12 dept-events-footer">
                                <a class="btn btn-dark-white btn-xlg" href="#">View All Events</a>
                                <a class="btn btn-yellow btn-xlg" href="#">View All Updates</a>
                            </div>
                        </div>
                    </section>
                    <!-- ./dept-events -->
                </div>
                <!-- Sidebar -->
                <?php get_sidebar( 'homepage' ); ?> 
                <!-- End Sidebar -->
            </div>
        </div>
        <!-- /.container -->
    </div>











        <?php
get_footer();