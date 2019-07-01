<?php 

namespace App\Spaces;

use App\Space;

class Work extends Space
{
    const nombre_plural = 'Obras';
    const nombre_singular = 'obra';
    const slug = 'espacios/obras';

    protected static $menu_icon = 'dashicons-book-alt';
}