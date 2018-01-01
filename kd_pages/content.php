<?php
/*************************************
Author: Koustubh Desai. 
Version: 0.0.1
Description:
This file is content.php of index.php for page.php. So all the pages (not blogs) will first load content from page.php and page.php inturn will load files from here. 


*************************************/
?>

<?php if(have_posts()):   while(have_posts()) : the_post();?>
<div class="col-md-8">
	<h1 class="">PAGEXX<?php echo the_title();?></h1>
	<?php the_content()?>
</div>
<?php endwhile; endif;?>

<!-- Contents of loop -->


