<?php

namespace App\Taxonomies\Spaces\Work;

use Illuminate\Taxonomy;

class WorkAuthor extends Taxonomy
{
    const nombre_plural = 'Autores';
    const nombre_singular = 'autor';
    const slug = 'work-author';

    protected static $postypes = ['work'];

    protected static $initialTerms = [];

}
