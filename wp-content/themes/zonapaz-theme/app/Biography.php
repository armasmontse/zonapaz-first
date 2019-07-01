<?php 

namespace App;

use Illuminate\CustomPostType;

class Biography extends CustomPostType
{
    const nombre_plural = 'Biografía';
    const nombre_singular = 'biografía';
    // Slug para que coincida con el de la página.
    const slug = 'biografia/escrita-por-op';

    protected static $supports = ['title', 'editor', 'thumbnail'];
    protected static $menu_icon = 'dashicons-businessman';

    public function setMetas()
    {

    }
}