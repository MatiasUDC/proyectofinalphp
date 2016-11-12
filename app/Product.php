<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        protected $table = 'productos';

	protected $fillable = ['nombre', 'descripcion', 'precio', 'imagen', 'stock','activo', 'precio', 'categoria_id'];

    
    // Relation con Categoria
    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    // Relation with OrderItem
    
    public function order_item()
    {
        return $this->hasOne('App\OrderItem');
    }
    
}


