@extends('template.layout')
@section('title',"Editar Perfil de Persona")
@section('content')

    
    {!! Form::open(['url' => 'persona', 'id'=>'persona']) !!}

            @include('persona.partials.form')
            
    {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">


</script>
@endsection
