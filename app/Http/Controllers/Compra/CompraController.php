<?php

namespace App\Http\Controllers\Compra;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Compra;
use Illuminate\Http\Request;
use Session;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $compra = Compra::paginate(25);

        return view('compra.index', compact('compra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('compra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\CompraRequest $request)
    {
        /*
        $this->validate($request, [
			'cant_producto' => 'required',
			'monto_total' => 'required',
			'reservado' => 'required'
		]);
        */

        $requestData = $request->all();
        
        Compra::create($requestData);

        Session::flash('flash_message', 'Compra Agregado!');

        return redirect('compra');
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
        $compra = Compra::findOrFail($id);

        return view('compra.show', compact('compra'));
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
        $compra = Compra::findOrFail($id);

        return view('compra.edit', compact('compra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'cant_producto' => 'required',
			'monto_total' => 'required',
			'reservado' => 'required'
		]);
        $requestData = $request->all();
        
        $compra = Compra::findOrFail($id);
        $compra->update($requestData);

        Session::flash('flash_message', 'Compra fue Actualizada!');

        return redirect('compra');
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
        Compra::destroy($id);

        Session::flash('flash_message', 'Compra fue Eliminada!');

        return redirect('compra');
    }
}
