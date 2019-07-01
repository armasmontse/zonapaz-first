<?php 

namespace App\Spaces;

use App\Space;

class Correspondence extends Space
{
    const nombre_plural = 'Correspondencia';
    const nombre_singular = 'correspondencia';
    const slug = 'espacios/correspondencia';

    protected static $menu_icon = 'dashicons-archive';
}