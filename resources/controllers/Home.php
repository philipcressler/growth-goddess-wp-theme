<?php

namespace App;

use Sober\Controller\Controller;

class Home extends Controller
{

	public function stickied_post() {
		$args = array(
	    'posts_per_page' => 1,
	    'post__in'  => get_option( 'sticky_posts' ),
	    'ignore_sticky_posts' => 1
		);

		$the_query = new \WP_Query( $args );
		return $the_query;
	}

	public function all_posts_without_stickies() {
		$args = array('post__not_in' => get_option( 'sticky_posts' ));
		$the_query = new \WP_Query( $args );
		return $the_query;
	}
}
