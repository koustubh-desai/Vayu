<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Vayu
 * @since Vayu
 */
?>
<!Doctype html>
<html <?php language_attributes(); ?>>
<?php get_header() ?>
<body ng-app="MyApp">
	<div id="main-wrapper" class="container-fluid">		
		<?php get_template_part('kd_global/main-navigation',get_post_format());?>
		<div class="wide-banner" class="col-12">
			<a href="javascript:void(0);" class="shayantan_image col-lg-1 col-centered">
				<img src="/wp-content/uploads/2017/12/shayanta.jpg"/>
			</a>
		</div>
		<div class="col-12">
			<div class="row">
				<?php get_template_part('kd_pages/sidebar',get_post_format()); ?>
				<?php get_template_part('kd_pages/content',get_post_format()); ?> 
			</div>
		</div>
		<?php get_sidebar()?> 
		<?php get_footer('page') ?> 
	</div>   
</body>
</html>
