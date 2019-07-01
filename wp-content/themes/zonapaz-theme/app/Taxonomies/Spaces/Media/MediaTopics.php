<?php

namespace App\Taxonomies\Spaces\Media;

use Illuminate\Taxonomy;

class MediaTopics extends Taxonomy
{
    const nombre_plural = 'Tópicos';
    const nombre_singular = 'tópico';
    const slug = 'media-topics';

    protected static $postypes = [
<<<<<<< HEAD
    	'media,'
    	'photo'
=======
    	'media',
        'photo',
        'bibliohemerography',
>>>>>>> ec2926e087a9ff7653aadfd102e4cf1ea4aee8bc
    ];

    protected static $initialTerms = [];

}
