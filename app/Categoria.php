<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{


	    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


	protected $fillable = ['nombre', 'descripcion'];

	public $timestamps = false;
    
    /*
    public function products()
    {
        return $this->hasMany('App\Product');
    }
	*/



}
