<?php

// register plugin
$thisfile = basename(__FILE__, ".php");
register_plugin(
	$thisfile,
	'Fix Site URL',
	'0.1.1',
	'Carlos Navarro',
	'http://www.cyberiada.org/cnb/',
	'Convert old to current Site URLs'
);

# add line like this, without the '#', to your gsconfig.php
# define('OLDSITEURL','http://localhost/gstest/');

add_action('edit-extras','fixsiteurl_edit'); 
add_filter('content','fixsiteurl_content');

function fixsiteurl_edit() {
  global $content, $SITEURL;
  if (defined('OLDSITEURL'))
    $content = str_replace(rtrim(trim(OLDSITEURL),'/').'/', $SITEURL, $content);
}

function fixsiteurl_content($content) {
  global $SITEURL;
  if (defined('OLDSITEURL'))
    $content = str_replace(rtrim(trim(OLDSITEURL),'/').'/', $SITEURL, $content);
  return $content;
}