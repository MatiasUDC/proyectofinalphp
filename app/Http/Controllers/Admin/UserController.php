<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\GuardarUserRequest;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $users = User::orderBy('nombre')->paginate(5);
        //dd($users);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.user.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarUserRequest $request)
    {
        
         $data = [
            'nombre'          => $request->get('nombre'),
            'apellido'     => $request->get('apellido'),
            'email'         => $request->get('email'),
            'user'          => $request->get('user'),
            'password'      => $request->get('password'),
            'type'          => $request->get('type'),
            'activo'        => $request->has('activo') ? 1 : 0,
            'direccion'       => $request->get('direccion'),
            'telefono'       => $request->get('telefono')

        ];

        $user = User::create($data);

        $message = $user ? 'Usuario agregado correctamente!' : 'El usuario NO pudo agregarse!';
        
        return redirect('/user')->with('message', $message);


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


        $user = User::findOrFail($id);
    
     return view('admin.user.edit', compact('user'));

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
            'nombre'      => 'required|max:100',
            'apellido' => 'required|max:100',
            'email'     => 'required|email',
            'user'      => 'required|min:4|max:20',
            'password'  => ($request->get('password') != "") ? 'required|confirmed' : "",
            'type'      => 'required|in:user,admin',
        ]);
        
        $user->nombre = $request->get('nombre');
        $user->apellido = $request->get('apellido');
        $user->email = $request->get('email');
        $user->user = $request->get('user');
        $user->type = $request->get('type');
        $user->direccion = $request->get('direccion');
        $user->activo = $request->has('activo') ? 1 : 0;
        if($request->get('password') != "") $user->password = $request->get('password');
        
       // $updated = $user->save();
        
       
        
        //return redirect()->route('admin.user.index')->with('message', $message);







        $requestData = $request->all();
        $user = User::findOrFail($id);

        //$product->activo = $request->has('activo') ? 1 : 0;

        $user->update($requestData);


         $message = $updated ? 'Usuario actualizado correctamente!' : 'El Usuario NO pudo actualizarse!';


        return redirect('/user')->with('message', $message);






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        User::destroy($id);

        
        $message = $id ? 'Usuario eliminada correctamente!' : 'El usuario NO pudo eliminarse!';

        return redirect('user')->with('message', $message);

    }
}
