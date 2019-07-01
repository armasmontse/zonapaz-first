<?php

namespace App\Taxonomies\Spaces\Bibliography;

use Illuminate\Taxonomy;

class BibliographyTypology extends Taxonomy
{
    const nombre_plural = 'Tipología';
    const nombre_singular = 'tipología';
    const slug = 'bibliography-typology';

    protected static $postypes = ['bibliography'];

    protected static $initialTerms = [
        'articulos-o-ensayos' => 'Artículos o ensayos',
        'capítulos-de-libros' => 'Capítulos de libros',
        'libros' => 'Libros',
        'tesis' => 'Tesis',
        'catalogos' => 'Catálogos',
        'bibliografia-critica-de-op' => 'Bibliografía crítica de OP'
    ];

}
