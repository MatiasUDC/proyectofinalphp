<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Session;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $categories = Categoria::all();
        //dd($categories);

        return view('admin.categoria.index', compact('categories'));
         
         //return view('admin.categoria.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    	        return view('admin.categoria.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
          'nombre' => 'required|unique:categorias|max:255',
          'descripcion' => 'required',
        ]);
        
        $category = Categoria::create([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion')
        ]);
        
        $message = $category ? 'Categoría agregada correctamente!' : 'La Categoría NO pudo agregarse!';
        
		//return redirect()->route('admin.categoria.index')->with('message', $message);

                return redirect('categoria')->with('message', $message);


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
 		
 		 $categorium = Categoria::findOrFail($id);

        return view('admin.categoria.edit', compact('categorium'));
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

    	 $this->validate($request, [
          'nombre' => 'required|max:255',
          'descripcion' => 'required',
        ]);


         $requestData = $request->all();
        
        $categorium = Categoria::findOrFail($id);
        $categorium->update($requestData);


        $message = $requestData ? 'Categoría actualizada correctamente!' : 'La Categoría NO pudo actualizarse!';


        return redirect('categoria')->with('message', $message);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          
          // Categoria::destroy($id);

        //Session::flash('flash_message', 'Categoria Eliminada!');

       // return redirect('categoria');


		Categoria::destroy($id);

        

        
        $message = $id ? 'Categoría eliminada correctamente!' : 'La Categoría NO pudo eliminarse!';
        

		return redirect('categoria')->with('message', $message);


    }
}
