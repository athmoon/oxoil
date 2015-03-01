<?php

	function get_post_content( $params )
	{
		$post_id  = $params['id'];

		$post     = get_post( $post_id );

		include( locate_template( 'ajax-product.php' ) );
	}