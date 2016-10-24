 <div class="form-group">
    {!! Form::label('nombre','Nombre de la Persona (*) ',['class'=> "form-label-cms-3" ]) !!}

    {!! Form::text('nombre',(isset($persona)? $persona->nombre: null),['class'=>'form-control',(isset($ver)? 'disabled': null ),'id' => 'nombre', 'required'=>'required']) !!}

</div>

<div class="form-group">
    {!! Form::label('apellido','Apellido de la Persona (*) ',['class'=> "form-label-cms-3" ]) !!}


    {!! Form::text('apellido',(isset($persona)? $persona->apellido: null),['class'=>'form-control',(isset($ver)? 'disabled': null ),'id' => 'apellido', 'required'=>'required' ]) !!}


</div>

<div class="form-group">

    {!! Form::label('dni',' Documento (*) ',['class'=> "form-label-cms-3"]) !!}


    {!! Form::number('documento',(isset($persona)? $persona->documento: null),['class'=>'form-control',(isset($ver)? 'disabled': null ),'id' => 'dni', 'required'=>'required', 'min'=>'00000000', 'max'=>'99999999']) !!}

</div>

<div class="form-group">
    {!! Form::label('fecha','Fecha (*) ',['class'=> "form-label-cms-3" ]) !!}
    
    {!! Form::text('fecha',null,['class'=>'col-sm-3 form-control','id' => 'fecha', 'required'=>'required']) !!}
    
    
</div>

<div class="form-group">
    {!! Form::label('genero','Genero de la Persona (*) ',['class'=> "form-label-cms-3" ]) !!}


    {!! Form::text('genero',(isset($persona)? $persona->genero: null),['class'=>'form-control',(isset($persona)? 'disabled': null ),'id' => 'genero', 'required'=>'required' ]) !!}


</div>

 <div class="form-group">
    {!! Form::label('telefono','Telefono de la Persona (*) ',['class'=> "form-label-cms-3" ]) !!}


    {!! Form::text('telefono',(isset($persona)? $persona->telefono: null),['class'=>'form-control',(isset($persona)? 'disabled': null ),'id' => 'telefono', 'required'=>'required']) !!}

</div>

<div class="form-group">
    {!! Form::label('direccion','Direccion de la Persona (*) ',['class'=> "form-label-cms-3" ]) !!}


    {!! Form::text('direccion',(isset($persona)? $persona->direccion: null),['class'=>'form-control',(isset($persona)? 'disabled': null ),'id' => 'direccion', 'required'=>'required']) !!}

</div>

<div class="form-group">
    {!! Form::label('estado','Estado'. (isset($persona)? '': '(*)' ),['class'=>"form-label-cms-3"])!!}
    {!! Form::checkbox('estado', (isset($persona)? $persona->estado: null),true,['class'=>'form-control','id' => 'estado',(isset($persona)? 'readonly': '' )]) !!}
</div>

