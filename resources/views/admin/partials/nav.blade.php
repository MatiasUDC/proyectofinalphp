














 <nav class="navbar navbar-default" >
  <div class="container">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('/') }}">
                        <!--{{ config('app.name', 'Tenda Online') }}-->
                        {{ config('', 'Tenda Online') }}

                    </a>
    </div>


 <!-- Branding Image -->
                    
    <!--
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
-->

 <div class="col-sm-3 col-md-8">
        <form class="navbar-form" role="search">
        <div class="input-group">

            <input type="text" class="form-control" placeholder="Buscar" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>






                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">


                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-th-large"></span><!-- aca va titulo--><span class="caret"></span></a>

                            <ul class="dropdown-menu">

                            <li><a href="{{ url('producto') }}"><span class="glyphicon glyphicon-th-list"></span> Productos</a></li>

                            <li><a href="{{ url('/categoria') }}"><span class="glyphicon glyphicon-th-list"></span> Categorias</a></li>

                             <li><a href="{{ url('/user') }}"><span class="glyphicon glyphicon-th-list"></span> Usuarios</a></li>
                            



                            </ul>
                        </li>




                       


                           <li class="dropdown">
                            <a href="{{ url('/admin/permissions') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-cog"></span><!-- aca va titulo--><span class="caret"></span></a>

                            <ul class="dropdown-menu">

                            <li><a href="{{ url('/admin') }}">Panel de Admin <span class="sr-only">(current)</span></a></li>
                            <li><a href="{{ url('/home') }}">Panel de Usuario <span class="sr-only">(current)</span></a></li>

                            <li><a href="{{ url('/admin/users') }}"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>
                             <li><a href="{{ url('/admin/roles') }}"><span class="glyphicon glyphicon-ok" ></span> Roles</a></li>
                        


                                <li><a href="{{ url('/admin/permissions') }}">
                                <span class=" glyphicon glyphicon-bookmark"></span> Todos los Permisos</a></li>
                                <li><a href="{{ url('/admin/give-role-permissions') }}"><span class="glyphicon glyphicon-plus"></span> Dar Permiso de Funciones</a></li>
                            </ul>
                        </li>

                        


                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                            <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span>Registr</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">


                                    <li><a href="{{ url('/perfil') }}"><span class="glyphicon glyphicon-ok" ></span> Mi perfil</a></li>
                        


                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>





   
  </div>
</nav>