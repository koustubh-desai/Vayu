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
      <div id="main-wrapper">
         <nav id="branding">
            <p><?php echo get_bloginfo('name');?></p>
         </nav>
         <div class="content-wrapper">
            <div class="left-sidebar">
               <p><?php echo get_bloginfo('description');?></p>
            </div>
            <div class="blog-main">
             <div class="blog-main-child">
               <?php
                  get_template_part('content',get_post_format()); 
                  ?>  
             </div>
            </div>
            <!-- /.blog-main -->
         </div>
         <div id="sidebar-wrapper">
            <?php get_sidebar()?>
         </div>
         <div id="footer">
            <?php get_footer() ?>
         </div>
      </div>
   </body>
</html>
