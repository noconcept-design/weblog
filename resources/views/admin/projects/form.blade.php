@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'name' => 'headline',
        'label' => 'Überschrift',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'url',
        'label' => 'Webseiten URL',
        'placeholder' => 'https://mein.tolles-projekt.de',
        'note' => 'Bitte eine URL angeben',
        'maxlength' => 200
    ])



    @formField('select', [
        'name' => 'sector',
        'label' => 'Bereich',
        'placeholder' => 'Bereich wählen',
        'note' => 'Für welches Zweck war/ist die Seite gedacht?',
        'options' => [
        [ 'value' => 1, 'label' => 'Kunst & Unterhaltung' ],
        [ 'value' => 2, 'label' => 'Technologie' ],
        [ 'value' => 3, 'label' => 'Design' ],
        [ 'value' => 4, 'label' => 'Ausbildung' ],
        [ 'value' => 5, 'label' => 'Kunst & Unterhaltung' ],
        [ 'value' => 6, 'label' => 'Freizeit & Hobby' ],
        [ 'value' => 7, 'label' => 'Portfolio' ],
        [ 'value' => 8, 'label' => 'Öffentlicher Bereich & Wohltätigkeit' ],
        [ 'value' => 9, 'label' => 'Handel & Ecommerce' ],
        [ 'value' => 10, 'label' => 'Schule & Unterricht' ]
        

        ]

    ])

    @formField('checkbox', [
        'name' => 'commercial',
        'label' => 'Gewerblich: War dies ein bezahltes Projekt?'
    ])

    @formField('date_picker', [
        'name' => 'launch_date',
        'label' => 'Veröffentlichung',
        'withTime' => false,
        'minDate' => '2018-01-01 12:00',
        'maxDate' => '2030-12-31 12:00'
    ])

    @formField('select', [
        'name' => 'layout',
        'label' => 'Gestaltung',
        'note' => 'Welche Seitengestaltung ist die beste für diese Art von Projekt?',
        'unpack' => true,
        'options' => [
            [
            'value' => 'regular',
            'label' => 'Ausgewogen'
            ],
            [
                'value' => 'text_heavy',
                'label' => 'Schwerpunkt auf Text'
            ],
            [
                'value' => 'image_heavy',
                'label' => 'Schwerpunkt auf Bilder'
            ],
        ]
    ])

    @formField('tags')    

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Projektbeschreibung',
        'toolbarOptions' => [
        ['header' => [2, 3, false]],
            'bold',
            'italic',
            'blockqoute',
            'link',
            'clean',
        ],
        'placeholder' => 'Die Projektgeschichte',
        'maxlength' => 2200,
        'rows' => 10,
        'note' => 'Gab es spezielle Herausforderungen?',
    ])



  @stop
@section('fieldsets')
    <a17-fieldset id="screengrabs" title="Website Screengrabs" :open=true>
        @formField('medias', [
            'name' => 'screengrab_desktop',
            'label' => 'Desktop',
            'note' => 'Desktopansicht',
        ])

        @formField('medias', [
            'name' => 'screengrab_tablet',
            'label' => 'Tablet',
            'note' => 'Tabletansicht',
        ])

        @formField('medias', [
            'name' => 'screengrab_phone',
            'label' => 'Handy',
            'note' => 'Handyansicht',
        ])    
    </a17-fieldset>

    <a17-fieldset title="Credits" id="credits" :open="true">
        @formField('repeater', ['type' => 'credit'])
    </a17-fieldset>
@endsection  
