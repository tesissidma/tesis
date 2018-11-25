<?php $__env->startSection('content'); ?>
<div class="right_col" role="main">
	<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
 
              
              <button type="button" class="btn btn-lg btn-primary fa fa-plus-circle "  data-toggle="modal" data-target="#exampleModal"> Nuevo</button>

				        <?php echo $__env->make('deportes.form.modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					     <br>
               <br>
<table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Deporte</th>
                          <th>Accion</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Judo</td>
                          <td><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Editar</button>
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">Eliminar</button></td>
                          
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Box</td>
                          <td><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Editar</button>
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">Eliminar</button></td>
                         
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Lucha</td>
                          <td><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Editar</button>
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">Eliminar</button></td>
                          
                        </tr>
                      </tbody>
                    </table>



			         </div>

                </div>
              </div>
            </div>
</div>		
                 
<?php $__env->stopSection(); ?>               
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>