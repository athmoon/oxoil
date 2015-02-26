<?php

	function get_post_content( $params )
	{
		$post_id  = $params['id'];
		$post     = get_post( $post_id );
		$template = get_field( 'template', $post_id );

		if ( file_exists( locate_template( $template ) ) )
		{
			include( locate_template( $template ) );
		}else{
			include( locate_template( 'ajax-default.php' ) );
		}
	}