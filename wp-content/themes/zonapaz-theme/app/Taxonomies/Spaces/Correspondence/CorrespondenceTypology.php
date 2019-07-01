<?php

namespace App\Taxonomies\Spaces\Correspondence;

use Illuminate\Taxonomy;

class CorrespondenceTypology extends Taxonomy
{
    const nombre_plural = 'Tipología';
    const nombre_singular = 'tipología';
    const slug = 'correspondence-typology';

    protected static $postypes = ['correspondence'];

    protected static $initialTerms = [
        'corresponsal' => 'Corresponsal'
    ];

}
