<?php 


// Override any of the default settings below:

$config['site_title'] = 'datenknoten.me';			// Site title
$config['pages_order_by'] = 'alpha';	// Order pages by "alpha" or "date"
$config['pages_order'] = 'desc';			// Order pages "asc" or "desc"
$config['at_navigation']['exclude']['single'] = array('index',);
$config['theme'] = 'semanticui'; 			// Set the theme (defaults to "default")
$config['at_navigation']['class'] = 'ui menu inverted';
$config['at_navigation']['class_a'] = 'ui item';


/*
$config['base_url'] = ''; 				// Override base URL (e.g. http://example.com)
$config['theme'] = 'default'; 			// Set the theme (defaults to "default")
$config['date_format'] = 'jS M Y';		// Set the PHP date format
$config['twig_config'] = array(			// Twig settings
	'cache' => false,					// To enable Twig caching change this to CACHE_DIR
	'autoescape' => false,				// Autoescape Twig vars
	'debug' => false					// Enable Twig debug
);

$config['excerpt_length'] = 50;			// The pages excerpt length (in words)

// To add a custom config setting:

$config['custom_setting'] = 'Hello'; 	// Can be accessed by {{ config.custom_setting }} in a theme

*/