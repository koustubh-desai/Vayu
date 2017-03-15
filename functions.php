<?php


function my_aj_action() {
$whatever = 'Wish you were here' ;

        echo $whatever;

	wp_die();
  }
add_action('wp_ajax_my_action_name', 'my_aj_action');
add_action('wp_ajax_nopriv_my_action_name', 'my_aj_action' );

/**
 * Proper way to enqueue scripts and styles.
 */
wp_enqueue_scripts('mainjs',get_template_directory_uri().'/script/main.js',NULL,NULL,false);


