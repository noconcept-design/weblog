@formField('medias', [
	'name' => 'variable_image',
	'label' => 'Bild',
])

@formField('select', [
		'name' => 'variable_image_alignment',
		'label' => 'Bild zuweisen',
		'unpack' => true,
		'options' => [
			[
				'value' => 'md:float-left pr-5',
				'label' => 'Links'
			],
			[
				'value' => 'md:float-right pl-5',
				'label' => 'Rechts'
			],

		]
	])

	@formField('select', [
		'name' => 'variable_image_width_desktop',
		'label' => 'Desktop',
		'options' => [

		[ 'value' => 'lg:w-3/12' , 'label' => '25%' ],
		[ 'value' => 'lg:w-4/12' , 'label' => '33%' ],
		[ 'value' => 'lg:w-6/12' , 'label' => '50%' ],
		[ 'value' => 'lg:w-8/12' , 'label' => '66%' ],
		[ 'value' => 'lg:w-9/12' , 'label' => '75%' ],
		[ 'value' => 'lg:w-full' , 'label' => '100%' ],
		]
	])

	@formField('select', [
		'name' => 'variable_image_width_tablet',
		'label' => 'Tablet',
		'options' => [

		[ 'value' => 'lg:w-3/12' , 'label' => '25%' ],
		[ 'value' => 'lg:w-4/12' , 'label' => '33%' ],
		[ 'value' => 'lg:w-6/12' , 'label' => '50%' ],
		[ 'value' => 'lg:w-8/12' , 'label' => '66%' ],
		[ 'value' => 'lg:w-9/12' , 'label' => '75%' ],
		[ 'value' => 'lg:w-full' , 'label' => '100%' ],
		]
	])

@formField('wysiwyg', [
	'name' => 'paragraph',
	'type' => 'textarea',
	'toolbarOptions' => [
		'bold',
		'italic',
		'link',
		'clean',
	],
	'label' => 'Absatz',
	'rows' => 4
])	