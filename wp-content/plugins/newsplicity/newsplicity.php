<?php
/**
 * Plugin Name: Newsplicity
 * Description: 
 */

if (!defined('ABSPATH')) {
	exit;
}

$temp_plugin = new NewsplicityCore();

class NewsplicityCore
{
	public function __construct()
	{
		add_action('init', array($this, 'init'));
	}

	public function init()
	{
		add_filter('blockstudio/settings/users/roles', function () {
			return ["administrator"];
		});

		if (defined("BLOCKSTUDIO")) {

			$plugin_dir = plugin_dir_path(__FILE__);

			$folders = new DirectoryIterator($plugin_dir);

			foreach ($folders as $folder) {

				$folder_name = $folder->getFilename();

				if ($folder->isDir() && $folder_name !== '.' && $folder_name !== '..') {

					$folder_path = $folder->getPathname();

					$folder_path = str_replace($plugin_dir, '', $folder_path);

					$folder_path = ltrim($folder_path, '/');

					Blockstudio\Build::init([
						'dir' => $plugin_dir . '/' . $folder_path,
					]);
				}
			}
		}
	}
}
