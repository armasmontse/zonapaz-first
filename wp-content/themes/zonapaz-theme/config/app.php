<?php

return [

    'providers' => [
        App\Providers\AppServiceProvider::class,
        App\Providers\AjaxServiceProvider::class,
        App\Providers\ControllerServiceProvider::class,
        App\Providers\CustomPostTypeServiceProvider::class,
        App\Providers\FiltersServiceProvider::class,
        App\Providers\ActionsServiceProvider::class,
        App\Providers\MenuServiceProvider::class,
        App\Providers\MetaboxServiceProvider::class,
        App\Providers\ScriptsServiceProvider::class,
        App\Providers\SupportServiceProvider::class,
        App\Providers\TaxonomyServiceProvider::class,
        App\Providers\OptionsServiceProvider::class,
    ],

    'special-pages' => [
        'home' => [
            'Home',
            ''
        ],
        'sobre-este-sitio' => [
            'Sobre este sitio',
            ''
        ],
        'biografia' => [
            'Biografía',
            ''
        ],
        'escrita-por-op' => [
            'Octavio Paz por él mismo',
            'biografia'
        ],
        'arbol-genealogico' => [
            'Árbol genealógico',
            'biografia'
        ],
        'cronologia' => [
            'Cronología',
            ''
        ],
        'buscar' => [
            'Buscar',
            ''
        ],
        'contacto' => [
            'Contacto',
            ''
        ],
        'equipo' => [
            'Equipo',
            ''
        ],
        'semblanza' => [
            'Semblanza',
            ''
        ],
        
    ],

    'special-categories' => [],

    'special-tags' => [],

];
