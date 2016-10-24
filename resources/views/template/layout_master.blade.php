
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/bootstrap/css/materialize.min.css">
        <link href="/bootstrap/css/icon.css" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <title>@yield('titulo')</title>
    </head>
    <body>
       
        @yield('content')

    </body>
    <script src = "/bootstrap/js/jquery-2.1.1.min.js"></script>
    <script src = "/bootstrap/js/materialize.min.js"></script>
    <script> var baseURL = "{{URL::to('/')}}"</script>
    <script src = "{{ URL::asset('js/AjaxisMaterialize.js')}}"></script>
    <script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
</html>
