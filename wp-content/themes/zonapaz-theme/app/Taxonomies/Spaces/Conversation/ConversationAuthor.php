<?php

namespace App\Taxonomies\Spaces\Conversation;

use Illuminate\Taxonomy;

class ConversationAuthor extends Taxonomy
{
    const nombre_plural = 'Autores';
    const nombre_singular = 'autor';
    const slug = 'conversation-author';

    protected static $postypes = ['conversation'];

    protected static $initialTerms = [];

}
