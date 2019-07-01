<?php 

namespace App\Spaces;

use App\Space;

class Conversation extends Space
{
    const nombre_plural = 'Conversación y Novedades';
    const nombre_singular = 'conversación';
    const slug = 'espacios/conversacion-y-novedades';

    protected static $menu_icon = 'dashicons-testimonial';
}