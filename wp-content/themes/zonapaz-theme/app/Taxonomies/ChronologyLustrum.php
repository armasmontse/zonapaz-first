<?php

namespace App\Taxonomies;

use Illuminate\Taxonomy;

class ChronologyLustrum extends Taxonomy
{
    const nombre_plural = 'Lustros';
    const nombre_singular = 'lustro';
    const slug = 'cronologia';

    protected static $postypes = [
        'media',
        'bibliography',
        'conversation',
        'correspondence',
        'work',
        'invention',
        'photo',
        'bibliohemerography',
    ];

    protected static $initialTerms = [];

}
