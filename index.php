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
<div id="main-wrapper" class="container">
   <h1>MIMOA</h1>
   <?php get_template_part('kd_global/main-navigation',get_post_format());?>
   <?php get_template_part('kd_blogs/content',get_post_format()); ?> 
      <div id="sidebar-wrapper">
         <?php get_sidebar()?>
      </div>
      <div id="footer">
         <?php get_footer('blog') ?>
      </div>
   </div>
   </body>
</html>
