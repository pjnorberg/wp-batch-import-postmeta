<?php
/*
* Plugin Name: WP Batch import postmeta
* Plugin URI: https://github.com/pjnorberg/wp-batch-import-postmeta
* Description: Export and import your Wordpress posts of any type to a handy CSV file, with your own post meta fields definitions.
* Version: 1.0
* Author: Johan Norberg (@pjnorberg)
* Author URI: http://johannorberg.biz
*/

include_once('wp-batch-convert.class.php');

$BatchConvert = new pjnorberg\BatchConvert();