<?php

namespace App\Taxonomies\Spaces\Media;

use Illuminate\Taxonomy;

class MediaYear extends Taxonomy
{
    const nombre_plural = 'Años';
    const nombre_singular = 'año';
    const slug = 'media-anio';

    protected static $postypes = ['media', 'photo', 'bibliohemerography'];

    protected static $initialTerms = [];

}
