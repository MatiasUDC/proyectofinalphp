@extends('template.layout')
@section('title',"Confirmar Compra")
@section('content')

	
    {!! Form::open(['url' => 'compras', 'id'=>'compras', 'files' => true]) !!}

            @include('compras.partials.form')
            
    {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">


</script>
@endsection