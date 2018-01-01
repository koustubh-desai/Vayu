
<?php if(have_posts()):   while(have_posts()) : the_post();?>
<div class="jumbotron" id="cric-c1">
	<div class="col-12">
		<div class="row">
			<h1 class="col-12"><?php echo the_title();?></h1>
			<div class="col-12">
			<p class="author-meta">Posted by <span><?php the_author();?></span> on <span><?php the_date(); ?></span></p>
			<ul class="shareinks col-12">
				<li><a href="#" class="fa fa-facebook"></a></li>
				<li><a href="#" class="fa fa-twitter"></a></li>
			</ul>
			</div>
		</div>
		<div class="">
			
		</div>
	</div>
</div>
	<div class="col-12">
		<div class="">
		<?php the_content()?>
		</div>
	</div>
</div>
<?php endwhile; endif;?>
<!-- Contents of loop -->


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
