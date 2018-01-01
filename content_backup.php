<?php 
$walker_page = new Walker_Page_Kd();
?>
<div class="head-navs fixed-top bg-inverse">
<header class="container navbar navbar-toggleable-md navbar-inverse ">

	<!--<ul class="nav navbar-nav">
            <li class="nav-item"></li>
        </ul>-->
        
		<a class="navbar-brand" id="cric-logo" href="/"><?php echo get_bloginfo('name');?></a>
	
      <button class="navbar-toggler navbar-toggleable-sm navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      
      <div class="navbar-collapse collapse" id="navbarsExampleDefault" aria-expanded="false" style="">
      	<?php echo '<ul class="navbar-nav">'.$walker_page->walk(get_pages(), 0).'</ul>';?>
      </div>
</header>
</div>
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


<?php endwhile; endif;?>
<!-- Contents of loop -->




</div>



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
