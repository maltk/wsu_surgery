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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
        <div class="hdr-top">
            <div class="container">
                <div class="dept-top-title pull-left">
                    <span>Wayne State | Department of Surgery</span>
                </div>
                <div class="search-form pull-right">
                    <input type="text" name="" id="mainSearchBox" class="form-control" placeholder="I'm Searching For...">
                </div>
            </div>
        </div>
        <div class="hdr-middle">
            <div class="container logo-title">
                <div class="logox"><img src="<?php echo get_template_directory_uri(); ?>/img/wsu-logo.png" alt=""></div>
                <span class="line"></span>
                <div class="dept-title">
                    <!--<h3>Wayne State University School of Medicine</h3>
                    <h1>The Michael and Marian Ilitch<br>Department of Surgery</h1>-->
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
					<h1><?php bloginfo( 'name' ); ?></h1>
                </div>
            </div>
        </div>
        <div class="hdr-bottom">
            <!-- Navigation -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display data-toggle='collapse'' -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                        <a class="navbar-brand" href="#">
                            <h1>The Michael and Marian Ilitch<br>Department of Surgery</h1>
                            <div class="shield"></div>
                        </a>
                    </div>
				</div>
                <!-- /.container -->	
				<?php
					wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker())
					);
				?>
            </nav>
        </div>
    </header>
