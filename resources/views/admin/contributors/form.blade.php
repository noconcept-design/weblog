@extends('twill::layouts.form')

@section('contentFields')

    @formField('tags', [
        'label' => 'Skills',
        'note' => 'HTML, Frontend, Designer, usw.'
    ])


    @formField('files', [
        'name' => 'resume',
        'label' => 'Aus Galerie verwenden',
        'note' => 'Datei sollte ein PDF sein.'
    ])

    @formField('medias', [
        'name' => 'avatar',
        'label' => 'Alter Ego',
        'note' => 'Bildchen von Dir.'
    ])    

    @formField('input', [
        'name' => 'email',
        'label' => 'Email Adresse',
        'maxlength' => 200
    ])    

    @formField('input', [
        'name' => 'twitter',
        'label' => 'Twitter',
        'placeholder' => '@realTrump',
        'maxlength' => 200
    ])    

    @formField('input', [
        'name' => 'portfolio_link',
        'note' => 'GitHub, Dribble, CodePen, usw.',
        'placeholder' => 'https://github.com/noconcept-design',
        'label' => 'Portfolio URL',
        'maxlength' => 200
    ])    

    @formField('input', [
        'name' => 'linkedin',
        'label' => 'LinkedIn',
        'placeholder' => 'https://linkedin.com/benutzername',
        'maxlength' => 200
    ])  

    @formField('block_editor', [
        'label' => 'Skill Biografie',
        'blocks' => ['quote', 'paragraph', 'paragraph_image','project_detail']
    ])
      
@stop
