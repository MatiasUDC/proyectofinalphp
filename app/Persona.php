<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Persona.
 *
 * @author  The scaffold-interface created at 2016-10-22 06:54:42pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Persona extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    public $timestamps = false;
    
    protected $table = 'personas';

	
}
