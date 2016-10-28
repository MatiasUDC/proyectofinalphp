@extends('template.layout')
@section('title',"Ver Compra")
@section('content')

    <h2>Compra Realizada por {{ $compra->id_usuario }}</h2>

    @include('compras.partials.form')
            

@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection
