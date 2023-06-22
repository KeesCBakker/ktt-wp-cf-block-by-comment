<?php

/**
 * KeesTalksTech Cloudflare Block By Comment
 *
 * @package       KTTCFBBC
 * @author        Kees . Bakker
 * @license       gplv2
 * @version       0.7
 *
 * @wordpress-plugin
 * Plugin Name:   KeesTalksTech Cloudflare Block By Comment
 * Plugin URI:    https://github.com/KeesCBakker/ktt-wp-cf-block-by-comment
 * Description:   A plugin to show a list of posts in WordPress.
 * Version:       0.1
 * Author:        Kees C. Bakker
 * Author URI:    https://keestalkstech.com/
 * Text Domain:   ktt-wp-cf-block-by-comment
 * Domain Path:   /languages
 * License:       MIT
 * License URI:   https://github.com/KeesCBakker/ktt-wp-cf-block-by-comment/LICENSE
 *
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) exit;

/* REGISTER THE UPDATER */
if (!class_exists('KttCfBlockByCommentUpdater')) {
	include_once(plugin_dir_path(__FILE__) . 'updater.php');
}

$updater = new KttCfBlockByCommentUpdater(__FILE__);
$updater->set_username('KeesCBakker');
$updater->set_repository('ktt-wp-cf-block-by-comment');
$updater->initialize();
