<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductoController extends Controller
{
    function index(){
    	return view('admin.producto.index');
    }

    function create(){
    	return view('admin.producto.formulario.create');
    }
}
