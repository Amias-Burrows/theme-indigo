<?php

function indigo_theme_support() {
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
}

add_action('after_theme_setup', 'indigo_theme_support');

function indigo_styles() {
	wp_enqueue_style('indigo-style', get_template_directory_uri() . '/assets/css/root.css', array(), null, 'all');
}

add_action('wp_enqueue_scripts', 'indigo_styles');

function indigo_menus() {
	$locations = array(
		'social' => 'Social Menu'
	);
	register_nav_menus($locations);
}

add_action('init', 'indigo_menus');

function indigo_iframe($wp_customize) {
	$wp_customize->add_section('indigo_iframe_section', array(
		'title' => __('Video')
	));
	$wp_customize->add_setting('indigo_iframe_link');
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'indigo_iframe_link', array(
		'label' => 'Video Link',
		'section' => 'indigo_iframe_section',
		'settings' => 'indigo_iframe_link'
	)));
}

add_action('customize_register', 'indigo_iframe');
