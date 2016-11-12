<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\GuardarProductRequest;
use App\Http\Controllers\Controller;
use App\Product;
use App\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $products = Product::orderBy('id', 'desc')->paginate(5);
        //dd($products);
        return view('admin.producto.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Categoria::orderBy('id', 'desc')->pluck('nombre', 'id');
        //dd($categories);
        return view('admin.producto.create', compact('categories'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarProductRequest $request)
    {
        //realizo validaciones tanto por request y en el controlador
          $data = [
            'nombre'          => $request->get('nombre'),
            'descripcion'   => $request->get('descripcion'),
            'precio'         => $request->get('precio'),
            'imagen'         => $request->get('imagen'),
            'stock'         => $request->get('stock'),
            'activo'       => $request->has('activo') ? 1 : 0,
            'categoria_id'   => $request->get('categoria_id')
        ];

        $product = Product::create($data);

        $message = $product ? 'Producto agregado correctamente!' : 'El producto NO pudo agregarse!';
        
        return redirect('producto')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $categories = Categoria::orderBy('id', 'desc')->pluck('nombre', 'id');

        $product = Product::findOrFail($id);


        return view('admin.producto.edit', compact('categories', 'product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Product::destroy($id);

        
        $message = $id ? 'Producto eliminada correctamente!' : 'La Categoría NO pudo eliminarse!';

        return redirect('producto')->with('message', $message);


    }
}
