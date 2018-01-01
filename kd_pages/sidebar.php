<div class="col-md-3 sidebar">
<?php $args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
$posts_array = get_posts( $args ); ?>
<div class="personal_details">
	<h2>About Me</h2>
	<p><span>Shayantan Bhattacharya</span><br/>
	<span>Author, Editor & <br/>CEO @ Cricminutes</span></p>
</div>
<h2>My Work</h2>
<ul class="posts">
<?php foreach ( $posts_array as $post ) : setup_postdata( $post );?>
	<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
	<?php endforeach;?> 
</ul>
<?php wp_reset_postdata();?> 

</div>
