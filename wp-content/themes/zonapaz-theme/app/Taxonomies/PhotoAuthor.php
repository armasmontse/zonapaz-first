<?php

namespace App\Taxonomies;

use Illuminate\Taxonomy;

class PhotoAuthor extends Taxonomy
{
    const nombre_plural = 'Autor';
    const nombre_singular = 'autor';
    const slug = 'autor-fototeca';

    protected static $postypes = [
        'photo',
    ];

    protected static $initialTerms = [];

}
