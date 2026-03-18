<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    // Esto permite que el CRUD guarde la información de una sola vez
    protected $fillable = [
        'titulo', 
        'vigencia', 
        'tienda', 
        'precio_original', 
        'precio_descuento'
    ];
}