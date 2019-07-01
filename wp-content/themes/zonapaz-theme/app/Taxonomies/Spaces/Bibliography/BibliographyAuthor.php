<?php

namespace App\Taxonomies\Spaces\Bibliography;

use Illuminate\Taxonomy;

class BibliographyAuthor extends Taxonomy
{
    const nombre_plural = 'Autores';
    const nombre_singular = 'autor';
    const slug = 'bibliography-author';

    protected static $postypes = ['bibliography'];

    protected static $initialTerms = [];

}
