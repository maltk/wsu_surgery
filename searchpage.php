<?php
/**
 * Template Name: Search
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
					</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
	</div>

<?php
get_sidebar();
get_footer();
