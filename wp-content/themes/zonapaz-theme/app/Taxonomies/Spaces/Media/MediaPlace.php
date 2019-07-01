<?php

namespace App\Taxonomies\Spaces\Media;

use Illuminate\Taxonomy;

class MediaPlace extends Taxonomy
{
    const nombre_plural = 'Lugares';
    const nombre_singular = 'lugar';
    const slug = 'media-place';

    protected static $postypes = ['media', 'photo', 'bibliohemerography'];

    protected static $initialTerms = [];

}
