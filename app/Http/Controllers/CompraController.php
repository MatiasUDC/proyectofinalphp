<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CompraController extends Controller
{
	function index(){
    	return view('compras.index');
    }

    function create(){
    	return view('compras.formulario.create');
    }    
    function show(){
    	return view('compras.formulario.show');
    }
}
<?php
