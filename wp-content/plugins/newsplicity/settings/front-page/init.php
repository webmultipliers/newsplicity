<?php

add_filter('mb_settings_pages', function ($settings_pages) {
	$settings_pages[] = [
		'menu_title' => __('Front Page', 'newsplicity'),
		'id' => 'newsplicity_front_page_settings',
		'position' => 25,
		'columns' => 1,
	];

	return $settings_pages;
});

add_filter('rwmb_meta_boxes', function ($meta_boxes) {

	$prefix = 'newsplicity_';

	$meta_boxes[] = [
		'title' => __('Front Page', 'newsplicity'),
		'settings_pages' => ['newsplicity_front_page_settings'],
		'fields' => [],
	];

	return $meta_boxes;
});

