<?php 

namespace App;

use Illuminate\CustomPostType;

class Quote extends CustomPostType
{
    const nombre_plural = 'Citas';
    const nombre_singular = 'cita';
    const slug = 'citas';

    protected static $supports = [''];
    protected static $menu_icon = 'dashicons-format-quote';

    public function setMetas()
    {

    }
}