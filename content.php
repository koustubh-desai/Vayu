<?php if(have_posts()):   while(have_posts()) : the_post();?>
<!-- Contents of loop -->
<ul>
 <li><?php next_posts_link('Previous'); ?></li>
 <li><?php previous_posts_link('Previous'); ?></li>
</ul>
<?php endwhile; endif;?>

<h1><?php the_title();?></h1>
<h2>Posted by <?php the_author();?> on <?php the_date(); ?></h2>
<?php the_content(); ?>





<?php 
/*echo get_bloginfo('name'); 
echo get_bloginfo('description');
echo get_bloginfo('wpurl');
echo the_title();
echo the_date();
echo the_author();
echo the_author_meta();
echo the_content();
wp_get_archives('type=monthly');
wp_list_pages('&title_li=');
the_tags(); */
?>
