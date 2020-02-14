@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'translated' => true,
        'name' => 'description',
        'label' => 'Description',
        'type' => 'textarea',
        'rows' => 3
    ])

    @formField('input', [
        'name' => 'website_url',
        'label' => 'Website URL',
    ])

    @formField('input', [
        'name' => 'frontend',
        'label' => 'Frontend',
    ])

    @formField('browser', [
        'label' => 'Author',
        'max' => 1,
        'name' => 'author',
        'moduleName' => 'authors'
    ])
@stop
