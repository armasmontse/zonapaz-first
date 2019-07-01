<?php

namespace App\Taxonomies\Spaces\Conversation;

use Illuminate\Taxonomy;

class ConversationTypology extends Taxonomy
{
    const nombre_plural = 'Tipología';
    const nombre_singular = 'tipología';
    const slug = 'conversation-typology';

    protected static $postypes = ['conversation'];

    protected static $initialTerms = [
        'conversacion' => 'Conversación',
        'novedades' => 'Novedades'
    ];

}
