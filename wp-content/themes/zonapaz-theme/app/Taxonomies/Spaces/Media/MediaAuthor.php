<?php

namespace App\Taxonomies\Spaces\Media;

use Illuminate\Taxonomy;

class MediaAuthor extends Taxonomy
{
    const nombre_plural = 'Autores';
    const nombre_singular = 'autor';
    const slug = 'media-author';

    protected static $postypes = [
        'media',
        'bibliohemerography'
    ];

    protected static $initialTerms = [];

}
