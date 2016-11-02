<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorium extends Model
{

    //stapler libreria para fotos
    


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categorias';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion'];

    
}
