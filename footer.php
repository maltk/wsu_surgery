<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WSU_Surgery
 */

?>

	    <footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="inner dept-title-desc">
							<?php if(get_theme_mod('ft_dept_title') != '') { ?>
							<h2><?php echo get_theme_mod('ft_dept_title'); ?></h2>
							<?php }  ?>

							<?php if(get_theme_mod('ft_dept_desc') != '') { ?>
							<p><?php echo get_theme_mod('ft_dept_desc'); ?></p>
							<?php }  ?>
						</div>
					</div>
					<div class="col-sm-offset-1 col-sm-2">
						<div class="inner">
							<h2>Links</h2>
							<ul class="navigation">
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Divisions</a></li>
								<li><a href="faculty.html">Faculty</a></li>
								<li><a href="#">Resources</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-offset-1 col-sm-4">
						<div class="inner">
							<h2>Find us on Social!</h2>
							<div class="searchbox-container">
								<input type="text" placeholder="What can we help you find?">
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<?php if(get_theme_mod('hd_t_dept_title') != '') { ?>
                    <p>&copy; <?php echo date("Y"); ?>, <?php echo get_theme_mod('hd_t_dept_title'); ?></p>
                    <?php }  ?>
				</div>
			</div>
		</footer>

<?php wp_footer(); ?>

</body>
</html>
