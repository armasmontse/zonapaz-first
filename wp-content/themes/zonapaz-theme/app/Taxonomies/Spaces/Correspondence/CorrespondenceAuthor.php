<?php

namespace App\Taxonomies\Spaces\Correspondence;

use Illuminate\Taxonomy;

class CorrespondenceAuthor extends Taxonomy
{
    const nombre_plural = 'Autores';
    const nombre_singular = 'autor';
    const slug = 'correspondence-author';

    protected static $postypes = ['correspondence'];

    protected static $initialTerms = [];

}
