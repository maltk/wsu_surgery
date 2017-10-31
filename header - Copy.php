<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WSU_Surgery
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="siteHeader">
        <div class="hdr-top">
            <div class="container">
                <div class="dept-top-title pull-left">
                    <?php if(get_theme_mod('hd_t_dept_title') != '') { ?>
                    <span><?php echo get_theme_mod('hd_t_dept_title'); ?></span>
                    <?php }  ?>
                </div>
                <div class="search-container pull-right">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
        <div class="hdr-middle">
            <div class="container logo-title">
                <div class="logox">
                    <?php if(get_theme_mod('dept_logo') != '') { ?>
                    <img src="<?php echo get_theme_mod('dept_logo'); ?>" alt="">
                    <?php }  ?>
                </div>
                <span class="line"></span>
                <div class="dept-title">
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<span class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></span>
					<?php
					endif; ?>
					<h1 class="site-title">
                        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
                    </h1>
                </div>
            </div>
        </div>
        <div class="hdr-bottom">
            <!-- Navigation -->
            <div class="navbar navbar-expand-xl navbar-sbd primaryNavigation">
                <div class="container">
                    <!--<div class="ill-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1056.2 516.5">
                        <path stroke-miterlimit="10" d="M901.9 305.8c-78.8 0-124-19.2-170.3-133.6l-44.1 58.2-42.6 50.3-40.1-84.5c-17.6-39.8-35.3-79.7-52.9-119.5-.1 2-.1 4-.2 6.1-.8 24.7-1.6 194.3.8 218.7l-13.9.4c-1-72.4-1.2-181.9-.8-219.5.1-12.3.8-25 .8-37.3V11.8L552 42.1c21.9 49.5 43.8 98.9 65.7 148.4l30.4 68.7 28.3-37.3 51.6-68.1 7.6-10 4.5 11.7c26.8 69.7 52.6 106.5 86.3 123 33 16.2 75.2 14.1 133.6 11.2 27.3-1.4 58.3-2.9 93.8-2.9v14c-35.1 0-65.9 1.5-93.1 2.9-21.6 1.1-41.1 2.1-58.8 2.1zM458.4 480.5l.1-32.6V48.8L315.2 292.5c-4.8-17.4-11.6-34.4-18.2-50.9-7.5-18.7-15.2-38-19.7-57.2l-4.6-19.9-8.6 18.5c-24 51.8-50.5 81-85.9 94.7-33.2 12.9-72.2 14.7-121.5 13.2-17.2-.5-35-.1-54.3-.1v13c19.1 0 36.8.5 53.9 1.1 94.9 2.9 159.1 1.8 212.3-99.4 4.4 14 10 27.8 15.4 41.3 8.6 21.4 17.5 43.5 21.4 65.7l3.3 18.7 135.8-230.9v336.9l-.3 43.5c0 20.9-3.7 27.8-23.5 30.4v3c10.8-.2 19.4-.4 30.4-.4s20.1.2 31.3.4v-3c-20.2-2.5-24-9.2-24-30.6z"/>
                        </svg>
                    </div>-->
                    <!--<div class="ill-outline-mask"></div>-->
                    <!-- Brand and toggle get grouped for better mobile display data-toggle='collapse'' -->
                    <div class="navbar-header col-xs-offset-2 col-xs-10">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                           <a class="navbar-brand" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><h1 class="site-title"><?php bloginfo('name'); ?></h1><!--<div class="shield"></div>--></a>
                            
                    </div>
				</div>
                <!-- /.container -->	
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="container">
                        <div class="search-container-mobile">
                            <?php get_search_form(); ?>
                        </div>
				        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                            <?php
				            wp_nav_menu( array(
					            //'menu'              => 'Testing Menu',
					            'theme_location'    => 'primary',
					            'depth'             => 2,
					            'container'         => '',
					            'container_class'   => '',
					            'container_id'      => '',
					            'menu_class'        => 'navbar-nav ml-auto',
					            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					            'walker'            => new wp_bootstrap_navwalker())
				            );
                            ?>
                        </div>

                </div>
                </div>
            </nav>



            




        </div>
    </header>
