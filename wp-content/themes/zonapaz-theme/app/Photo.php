<?php 

namespace App;

use Illuminate\CustomPostType;

class Photo extends CustomPostType
{
    const nombre_plural = 'Fototeca';
    const nombre_singular = 'fototeca';
    // Slug para que coincida con el de la página.
    const slug = 'fototeca';

    protected static $supports = ['title', 'thumbnail'];
    protected static $menu_icon = 'dashicons-images-alt';

    public function setMetas()
    {

    }
}