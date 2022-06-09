@extends('twill::layouts.form', [
    'contentFieldsetLabel' => 'Impostazioni',
    'revisions' => [],
    'additionalFieldsets' => [
        ['fieldset' => 'media', 'label' => 'Media'],
    ],
    'sideFieldsetLabel' => 'Settings'
])

@section('contentFields')

    @formField('select', [
    'name' => 'location',
    'label' => 'Posizione',
    'placeholder' => 'Seleziona posizione del menu',
    'options' => [
    [
    'value' => 1,
    'label' => 'Header'
    ],
    [
    'value' => 3,
    'label' => 'Footer'
    ]
    ]
    ])

    @formField('checkbox', [
    'name' => 'default',
    'label' => 'Default'
    ])

@stop

@section('fieldsets')

    <a17-fieldset title="Menu" id="menu" :open="true">

        @formField('block_editor', [
        'label' => 'Aggiungi al menu',
        'blocks' => ['menu']
        ])

    </a17-fieldset>
@endsection

{{--@section('sideFieldset')

    <a17-cache-button action="{{ getAdminAppPath() }}/cache-clear"></a17-cache-button>

@endsection--}}

