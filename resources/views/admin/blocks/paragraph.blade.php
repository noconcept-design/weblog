@formField('input', [
	'name' => 'quote_text',
	'label' => 'zitieren',
	'placeholder' => 'Ein super Kollege, mit dem lässt es sich schaffen',
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