<!DOCTYPE html>
<html lang="es">

<?php echo $__env->make('layout.encabezado', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <?php echo $__env->make('layout.nombre', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
           <?php echo $__env->make('layout.informacionperfil', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php echo $__env->make('layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php echo $__env->make('layout.configuracionmenu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /menu footer buttons -->
          </div>
        </div>
        
        <!-- top navigation -->
        <?php echo $__env->make('layout.barranavegacion', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /top navigation -->
        

        <?php echo $__env->yieldContent('content'); ?>

             <!-- footer content -->
        <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
<?php echo $__env->make('layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
</html>