<!DOCTYPE html>
<html>
<head>
	<title> @yield('title')</title>
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
	
        
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('datepicker/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('datepicker/locales/bootstrap-datepicker.es.js') }}"></script>
     
        @yield('script')
        
     


	 
</body>
</html>