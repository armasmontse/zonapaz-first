<?php

namespace App\Taxonomies\Spaces\Media;

use Illuminate\Taxonomy;

class MediaTypology extends Taxonomy
{
    const nombre_plural = 'Tipología';
    const nombre_singular = 'tipología';
    const slug = 'media-typology';

    protected static $postypes = ['media', 'bibliohemerography',];

    protected static $initialTerms = [
        'cine' => 'Cine',
        'exposiciones' => 'Exposiciones',
        'fotografia' => 'Fotografía',
        'musica' => 'Música',
        'pintura' => 'Pintura',
        'dibujo' => 'Dibujo',
        'caricatura' => 'Caricatura',
        'teatro' => 'Teatro'
    ];

}
