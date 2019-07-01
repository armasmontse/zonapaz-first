<?php

namespace App\Taxonomies\Spaces\Work;

use Illuminate\Taxonomy;

class WorkTypology extends Taxonomy
{
    const nombre_plural = 'Tipología';
    const nombre_singular = 'tipología';
    const slug = 'work-typology';

    protected static $postypes = ['work'];

    protected static $initialTerms = [
        'obras-completas' => 'Obras completas',
        'libros' => 'Libros',
        'traducciones' => 'Traducciones',
        'obras-conmemorativas' => 'Obras conmemorativas',
        'correspondencia' => 'Correspondencia'
    ];

}
