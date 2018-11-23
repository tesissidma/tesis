<!DOCTYPE html>
<html lang="es">

@include('layout.encabezado')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            @include('layout.nombre')

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
           @include('layout.informacionperfil')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('layout.menu')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('layout.configuracionmenu')
            <!-- /menu footer buttons -->
          </div>
        </div>
        
        <!-- top navigation -->
        @include('layout.barranavegacion')
        <!-- /top navigation -->
        

        @yield('content')

             <!-- footer content -->
        @include('layout.footer')
  </body>
@include('layout.scripts') 
</html>