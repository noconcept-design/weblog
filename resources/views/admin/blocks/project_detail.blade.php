@formField('input', [
	'name' => 'project_title',
	'label' => 'Projekt Überschrift',
	'maxlength' => 200
])

@formField('input', [
	'name' => 'project_url',
	'label' => 'Projekt URL',
	'maxlength' => 200
])

@formField('medias', [
	'name' => 'past_project_image',
	'label' => 'Bild',
])

@formField('wysiwyg', [
	'name' => 'project_description',
	'label' => 'Projektbeschreibung',
	'toolbarOptions' => [
		'bold',
		'italic',
		'link',
		'clean',
	],
	'placeholder' => 'Beschreibe in kurzen Worten das Projekt sowie deine Funktion.',
	'maxlength' => 235,
	'rows' => 5, 
	'note' => "Beschreibe das Projekt",
])