<?php

namespace App\Taxonomies\Spaces\Invention;

use Illuminate\Taxonomy;

class InventionTypology extends Taxonomy
{
    const nombre_plural = 'Tipología';
    const nombre_singular = 'tipología';
    const slug = 'invention-typology';

    protected static $postypes = ['invention'];

    protected static $initialTerms = [];

}
