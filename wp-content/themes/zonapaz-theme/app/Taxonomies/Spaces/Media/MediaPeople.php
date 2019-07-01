<?php

namespace App\Taxonomies\Spaces\Media;

use Illuminate\Taxonomy;

class MediaPeople extends Taxonomy
{
    const nombre_plural = 'Personas';
    const nombre_singular = 'persona';
    const slug = 'media-people';

    protected static $postypes = [
        'media',
        'photo',
        'bibliohemerography',
    ];

    protected static $initialTerms = [];

}
