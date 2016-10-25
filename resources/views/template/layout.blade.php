<!DOCTYPE html>
<html>
<head>
	<title> @yield('title')</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
         <link href="/css/icon.css" rel="stylesheet">


	    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('datepicker/datepicker3.css') }}">

        @yield('style')



    </head>
    <body>



	@include('template.errores')

        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    @yield('content')
                    
         
         
                </div>

            </div>

        </div><!-- /.container -->
	
        


     <script src="/js/jquery-2.1.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
<script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>

     




        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>


        <script src="{{ asset('datepicker/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('datepicker/locales/bootstrap-datepicker.es.js') }}"></script>



     
        @yield('script')
        
     


	 
</body>
</html>