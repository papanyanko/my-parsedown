<?php
/*
Plugin Name: My Parsedown
Plugin URI: https://github.com/papanyanko/my-parsedown
Description: A plugin to use Parsedown in WordPress
Version: 1.0
Author: papanyanko
Author URI: https://papanyanko.com
*/

require_once (plugin_dir_path(__FILE__) . 'Parsedown/Parsedown.php');

function my_parsedown($content)
{
    $parsedown = new Parsedown();
    return $parsedown->text($content);
}

remove_filter('the_content', 'wpautop');
add_filter('the_content', 'my_parsedown');
