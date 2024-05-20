<?php
/**
 * Name: Articles
 * Description: Articles post type.
 * Type: post
 * Subtype: article
 */

add_action('init', function () {
	register_post_type('article', [
		'label'               => esc_html__('articles', 'newsplicity'),
		'labels'              => [
			'name'                     => esc_html__('Articles', 'newsplicity'),
			'singular_name'            => esc_html__('Article', 'newsplicity'),
		],
		'description'         => '',
		'public'              => true,
		'hierarchical'        => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'can_export'          => true,
		'delete_with_user'    => true,
		'has_archive'         => 'articles',
		'rest_base'           => 'articles',
		'show_in_menu'        => true,
		'menu_position'       => '',
		'menu_icon'           => 'dashicons-admin-generic',
		'capability_type'     => 'post',
		'rewrite'             => [
			'slug'       => 'article',
			'with_front' => false,
		],
		'supports' => [
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'revisions',
			'page-attributes',
		],
	]);
});