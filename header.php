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
                <div class="row">
                    <div class="dept-top-title mr-auto">
                        <?php if(get_theme_mod('hd_t_dept_title') != '') { ?>
                        <span><?php echo get_theme_mod('hd_t_dept_title'); ?></span>
                        <?php }  ?>
                    </div>
                    <div class="search-container">
                        <?php get_search_form(); ?>
                    </div>
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
                <div class="dept-title col-md-6">
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<span class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></span>
					<?php
					endif; ?>
					<h1 class="site-title">
                        <a href="<?php bloginfo('url'); ?>" class="navbar-brand" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
                    </h1>
                </div>
            </div>
        </div>
        <div class="hdr-bottom">
            <!-- Navigation -->
            <div class="navbar navbar-expand-xl primaryNavigation">
                    
				        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                            <?php
				            wp_nav_menu( array(
					            //'menu'              => 'Testing Menu',
					            'theme_location'    => 'primary',
					            'depth'             => 2,
					            'container'         => '',
					            'container_class'   => '',
					            'container_id'      => '',
					            'menu_class'        => 'navbar-nav mr-auto',
					            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					            'walker'            => new wp_bootstrap_navwalker())
				            );
                            ?>
                        </div>
            </nav>



            




        </div>
    </header>
