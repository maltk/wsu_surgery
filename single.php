<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WSU_Surgery
 */

get_header(); ?>

	<!-- Banner -->
    <section class="cp-hero">
        <div class="container">
			<?php 
				the_title( '<h1>', '</h1>' );
			?>
        </div>
    </section>
    <!-- #banner ends -->

	<!-- Main Content -->
    <div class="page-content">
    <div class="container surg-body">
        <div class="row">
            <!-- Main Content Column -->
            <div class="col-sm-12 col-md-8 surg-content">
                <div id="main_content">
					
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>


                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
	</div>














<?php
get_sidebar();
get_footer();
