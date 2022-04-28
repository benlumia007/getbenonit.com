<?php
# Custom content types configuration.
#
# "{$type}" => [
#	'path'         => string, // path relative to `user/content` (no slashes)
#	'taxonomy'     => bool,   // whether content type is a taxonomy
#       'term_collect' => string  // content type for taxonomy terms to collect
# ]
use Blush\Controllers\Single;

return [
	// Create custom content type and taxonomy for blog posts.
	'posts' => [
		'path'       => '_posts',
		'collection' => [ 'order' => 'desc' ],
		'uri'        => 'archives',
		'uri_single' => 'archives/{year}/{month}/{day}/{name}',
		'routes'     => [
			'archives/{year}/{month}/{day}/{name}'      => Single::class,
			'archives/{year}/{month}/{day}/page/{page}' => ArchivePost::class,
			'archives/{year}/{month}/{day}'             => ArchivePost::class,
			'archives/{year}/{month}/page/{page}'       => ArchivePost::class,
			'archives/{year}/{month}'                   => ArchivePost::class,
			'archives/{year}/page/{page}'               => ArchivePost::class,
			'archives/{year}'                           => ArchivePost::class,
		]
	],
	'tag' => [
		'path'            => 'topics',
		'taxonomy'        => true,
		'term_collect'    => 'posts',
		'term_collection' => [ 'order' => 'desc' ],
	]
];