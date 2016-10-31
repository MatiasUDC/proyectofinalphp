<?php

namespace App\Http\Controllers\Categoria;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categorium;
use Illuminate\Http\Request;
use Session;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categoria = Categorium::paginate(25);

        return view('categoria.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\CategoriaRequest $request)
    {
      /*  $this->validate($request, [
			'nombre' => 'required',
			'descripcion' => 'required'
		]);
        */
        $requestData = $request->all();
        
        Categorium::create($requestData);

        Session::flash('flash_message', 'Categoria Agregado!');

        return redirect('categoria');
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
        $categorium = Categorium::findOrFail($id);

        return view('categoria.show', compact('categorium'));
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
        $categorium = Categorium::findOrFail($id);

        return view('categoria.edit', compact('categorium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Requests\CategoriaRequest  $request)
    {
      /*  $this->validate($request, [
			'nombre' => 'required',
			'descripcion' => 'required'
		]);
        */
        $requestData = $request->all();
        
        $categorium = Categorium::findOrFail($id);
        $categorium->update($requestData);

        Session::flash('flash_message', 'Categoria Actualizada!');

        return redirect('categoria');
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
        Categorium::destroy($id);

        Session::flash('flash_message', 'Categoria Eliminada!');

        return redirect('categoria');
    }
}
