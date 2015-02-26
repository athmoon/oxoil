<?php

	/**
	 * @param $path
	 *
	 * @return string
	 */
	function asset( $path )
	{
		return get_template_directory_uri() . "/{$path}";
	}


	/**
	 * @param $path
	 *
	 * @return string
	 */
	function link_js( $path )
	{
		$path = asset( $path );

		return "<script src=\"{$path}\"></script>";
	}


	/**
	 * @param $path
	 *
	 * @return string
	 */
	function link_css( $path )
	{
		$path = asset( $path );

		return "<link rel=\"stylesheet\" href=\"{$path}\" />";
	}


	/**
	 * @param $mix
	 */
	function dd( $mix )
	{
		die( var_dump( $mix ) );
	}


	/**
	 * @param $ref_id
	 *
	 * @return null|string
	 */
	function is_active( $ref_id )
	{
		return get_the_ID() == $ref_id ? 'active' : null;
	}


	function thumbnail_src( $post_id, $size = 'medium' )
	{
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $size );

		return $thumb[0];
	}


	function preloader()
	{
		return '<div class="bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div>';
	}

	function trace($ar, $color = "F00"){
	echo '<pre style="z-index:9999;color:#'.$color.'">';
	print_r($ar);
	echo '</pre><br style="clear:both;" /><br />';
}