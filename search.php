<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WSU_Surgery
 */

get_header(); ?>



<!-- Banner -->
    <section class="cp-hero">
        <div class="container">
			<h1>Search</h1>
			<?php if(get_theme_mod('ft_dept_title') != '') { ?>
			<h2><?php echo get_theme_mod('ft_dept_title'); ?></h2>
			<?php }  ?>
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
					if ( have_posts() ) : ?>
                    	<h1 class="search-title"><?php printf( esc_html__( 'Search results for: %s', 'wsu_surgery' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						<div class="search-container">
						<?php
						global $query_string;

						$query_args = explode("&", $query_string);
						$search_query = array();

						if( strlen($query_string) > 0 ) {
							foreach($query_args as $key => $string) {
								$query_split = explode("=", $string);
								$search_query[$query_split[0]] = urldecode($query_split[1]);
							} // foreach
						} //if

						$search = new WP_Query($search_query);
						?>

						<?php get_search_form(); ?>
						<?php
						global $wp_query;
						$total_results = $wp_query->found_posts;
						?>
						<div class="result-info">About <?php echo $total_results ?> results</div>
					</div>
					<hr>
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							* Run the loop for the search to output the results.
							* If you want to overload this in a child theme then include a file
							* called content-search.php and that will be used instead.
							*/
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
	</div>

<?php
get_sidebar();
get_footer();
