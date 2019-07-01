<?php

namespace App\Taxonomies\Spaces\Correspondence;

use Illuminate\Taxonomy;

class CorrespondencePlace extends Taxonomy
{
    const nombre_plural = 'Lugares';
    const nombre_singular = 'lugar';
    const slug = 'correspondence-place';

    protected static $postypes = ['correspondence'];

    protected static $initialTerms = [];

}
