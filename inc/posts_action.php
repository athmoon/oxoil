<?php

	function get_post_content( $params )
	{
		$post_id  = $params['id'];
		$post     = get_post( $post_id );
		$template = get_field( 'template', $post_id );

		echo 'asdasd';
		//include('ajax-default.php');
	}