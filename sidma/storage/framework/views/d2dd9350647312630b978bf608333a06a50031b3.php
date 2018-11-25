<?php $__env->startSection('content'); ?>
<div class="right_col" role="main">
	<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulario de Ingreso</h2>
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
                  <?php echo Form::open(['Route' => '', 'Method' => 'POST', 'Class' => 'form-horizontal form-label-left']); ?>

					        <?php echo $__env->make('entrenadores.form.fentrenador', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        					<div class="ln_solid"></div>
        					<div class="form-group">
        					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"><center>
        					<a class="btn btn-success" onclick="new PNotify({
                                          title: 'Regular Success',
                                          text: 'That thing that you were trying to do worked!',
                                          type: 'success',
                                          styling: 'bootstrap3',

                                        });">Success</a></center>
        					</div>
        					</div>
                  <?php echo Form::close(); ?>



			 </div>
                </div>
              </div>
            </div>
</div>		
<?php $__env->stopSection(); ?>               
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>