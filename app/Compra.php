<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra.php extends Model
{
    protected $table = "productos";
    protected $fillable = 	[
	    						'id_usuario', 
								'id_producto',
								'id_metodo',
								'monto',
							];



    public function usuario()
    {
    	return $this->belongsTo('App\Usuario');
    }
    public function producto()
    {
    	return $this->belongsTo('App\Producto');
    }
    public function metodo()
    {
    	return $this->belongsTo('App\Metodo');
    }

}