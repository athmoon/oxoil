<?php

	require_once( 'inc/helpers.php' );
	require_once( 'inc/hooks.php' );
	require_once( 'inc/dimox_breadcrumbs.php' );
	require_once( 'inc/posts_action.php' );

	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */
	function arphabet_widgets_init() {

		register_sidebar( array(
			'name'          => 'Home right sidebar',
			'id'            => 'home_right_1',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );

	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );

	register_sidebar(array(
		'name' => 'Footer Left',
		'id'   => 'footer-left-widget',
		'description'   => 'Left Footer widget position.',
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));

	add_theme_support( 'menus' );

	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

	add_action( 'admin_menu', 'my_menu' );

	function my_menu()
	{
		add_menu_page( 'Form Entries', 'Applicants', 'view_applicants', 'form-entries', 'form_entries_display', 'http://alfareedajobs.com/wp-content/uploads/2014/12/users6-21.png', 11 );
	}

	function form_entries_display()
	{
		get_template_part( 'partials/cv_registration_iframe' );
	}

	/*
	 * Initianilized Function
	 * */
	add_action( 'init', 'my_script_enqueuer' );
	function my_script_enqueuer()
	{

		if ( isset( $_POST['action'] ) && function_exists( $_POST['action'] ) )
		{
			$_POST['action']($_POST);
			die();
		}

	}