<?php

namespace App\Taxonomies;

use Illuminate\Taxonomy;

class Theme extends Taxonomy
{
    const nombre_plural = 'Temas';
    const nombre_singular = 'tema';
    const slug = 'temas';

    protected static $postypes = [
        'media',
        'bibliography',
        'conversation',
        'correspondence',
        'work',
    ];

    protected static $initialTerms = [];
}
