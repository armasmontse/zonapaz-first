<?php 

namespace App;

use Illuminate\CustomPostType;

class Chronology extends CustomPostType
{
    const nombre_plural = 'Cronología-Narración';
    const nombre_singular = 'cronologia-narracion';
    const slug = 'cronologia-narracion';

    protected static $supports = ['title', 'editor'];
    protected static $menu_icon = 'dashicons-clock';

    public function setMetas()
    {

    }
}