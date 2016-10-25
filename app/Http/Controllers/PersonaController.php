<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Persona;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class PersonaController.
 *
 * @author  The scaffold-interface created at 2016-10-25 07:42:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('persona/formulario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona();

        
        $persona->dni = $request->dni;

        
        $persona->nombre = $request->nombre;

        
        $persona->apellido = $request->apellido;

        
        $persona->fecha_nac = $request->fecha_nac;

        
        $persona->genero = $request->genero;

        
        $persona->telefono = $request->telefono;

        
        $persona->id_pais = $request->id_pais;

        
        $persona->direccion = $request->direccion;

        
        $persona->estado = $request->estado;

        
        
        $persona->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new persona has been created !!']);

        return redirect('persona');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('persona/'.$id);
        }

        $persona = Persona::findOrfail($id);
        return view('persona/formulario.show',compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('persona/'. $id . '/edit');
        }

        
        $persona = Persona::findOrfail($id);
        return view('persona/formulario.edit',compact('persona'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $persona = Persona::findOrfail($id);
    	
        $persona->dni = $request->dni;
        
        $persona->nombre = $request->nombre;
        
        $persona->apellido = $request->apellido;
        
        $persona->fecha_nac = $request->fecha_nac;
        
        $persona->genero = $request->genero;
        
        $persona->telefono = $request->telefono;
        
        $persona->id_pais = $request->id_pais;
        
        $persona->direccion = $request->direccion;
        
        $persona->estado = $request->estado;
        
        
        $persona->save();

        return redirect('persona');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Atencion!!','Estas seguro que deseas Eliminar?','/persona/'. $id . '/delete/');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$persona = Persona::findOrfail($id);
     	$persona->delete();
        return URL::to('persona');
    }
}
