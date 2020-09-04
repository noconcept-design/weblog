<?php

return [
	'locale' => 'de',
    'fallback_locale' => 'en',
    'publish_date_24h' => true, 
    'publish_date_display_format' => 'DD MMMM YYYY HH:mm',
    'search' => true,
    'users-description' => true,
    'activitylog' => true,
    'users-2fa' => true,
    'users-oauth' => true,
    	
	'file_library' => [
		'filesize_limit' => 10,
		'allowed_extensions' => ['pdf']
	],
	'block_editor' => [
		'crops' => [
			'project_image' => [
				'default' => [
					[
					'name' => 'default',
					'ratio' => 16 / 9
					]
				]
			],
			'past_project_image' => [
				'default' => [
					[
						'name' => 'default',
						'ratio' => 16 / 9
					]
				]
			],
			'variable_image' => [
				'default' => [
					[
						'name' => 'default',
					]
				]
			]
		],
		'blocks' => [
			'quote' => [
				'title' => 'Quote',
				'icon' => 'quote',
				'component' => 'a17-block-quote',
				'rules' => [
					'quote_text' => 'required'
				]
			],
			'paragraph' => [
				'title' => 'Paragraph',
				'icon' => 'text',
				'component' => 'a17-block-paragraph'
			],
			'paragraph_image' => [
				'title' => 'Paragraph & Image',
				'icon' => 'image-text',
				'component' => 'a17-block-paragraph_image'
			],
			'project_detail' => [
				'title' => 'Past Project Spotlight',
				'icon' => 'content-editor',
				'component' => 'a17-block-project_detail',
				'rules' => [
					'project_title' => 'required',
					'project_url' => 'required|url',
					'project_description' => 'required'	
				]
			]
		],
		'repeaters' => [
			'credit' => [
				'title' => 'Credit',
				'trigger' => 'Add credit',
				'component' => 'a17-block-credit'
			]
		]
	]
];




