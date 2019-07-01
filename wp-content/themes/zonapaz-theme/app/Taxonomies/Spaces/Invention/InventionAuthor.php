<?php

namespace App\Taxonomies\Spaces\Invention;

use Illuminate\Taxonomy;

class InventionAuthor extends Taxonomy
{
    const nombre_plural = 'Autores';
    const nombre_singular = 'autor';
    const slug = 'invention-author';

    protected static $postypes = ['invention'];

    protected static $initialTerms = [];

}
