<?php

namespace App\Http\Controllers\Producto;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Producto;
use App\Categorium;
use Illuminate\Http\Request;
use Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $producto = Producto::paginate(25);

        return view('Producto.producto.index', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categoria = Categorium::all('id','nombre');
    return view('Producto.producto.create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\ProductoRequest $request)
    {
       

        //se agrega para subida de la foto

         $producto=Producto::create( $request->all());

        if(  $request->file('imagen')   ){   

            $file = $request->file('imagen');

            $nombre = 'producto_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/imagenes/productos/';
           // $file->move($path, $nombre);
            $producto->imagen = $nombre;
            $producto->save();
        }

        


        $requestData = $request->all(); 
       // Producto::create($requestData);
        Session::flash('flash_message', 'Producto fue Cargado Exitosamente!');
        return redirect('producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);

        return view('Producto.producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        return view('Producto.producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Requests\ProductoRequest $request)
    {
       
        $requestData = $request->all();
        $producto = Producto::findOrFail($id);
        $producto->update($requestData);

        Session::flash('flash_message', 'Producto fue Actualizado Exitosamente!');

        return redirect('producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Producto::destroy($id);

        Session::flash('flash_message', 'Producto Fue Eliminado!');

        return redirect('producto');
    }
}
