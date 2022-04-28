<?php
# Custom content types configuration.
#
# "{$type}" => [
#	'path'         => string, // path relative to `user/content` (no slashes)
#	'taxonomy'     => bool,   // whether content type is a taxonomy
#       'term_collect' => string  // content type for taxonomy terms to collect
# ]

return [
	// Create custom content type and taxonomy for blog posts.
	'posts' => [
		'path'       => 'blog',
		'collection' => [ 'order' => 'desc' ]
	],
	'categories' => [
		'path'            => 'category',
		'taxonomy'        => true,
		'term_collect'    => 'posts',
		'term_collection' => [ 'order' => 'desc' ]
	]
];