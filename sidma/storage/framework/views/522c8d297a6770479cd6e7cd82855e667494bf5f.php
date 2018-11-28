<?php $__env->startSection('content'); ?>
<div class="right_col" role="main">
	<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Controles de Competencias</h2>
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
                  
                  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                  <span>Deporte:</span>
                  <select id="heard" class="form-control" required="">
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select>
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                      <span>Fecha:*</span>
                        <div class="input-group date" id='myDatepicker2'>
                            <input type='text' class="form-control" required='required'/>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>                   
                    </div>

                  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                  <span>Lugar:</span>
                  <select id="heard" class="form-control" required="">
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select>
                  </div>

                  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                  <span>Categoría:</span>
                  <select id="heard" class="form-control" required="">
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select>
                  </div>


			           </div>

                 <div class="x_content">

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <span>N° de Provincias:</span>
                    <input type="text" placeholder="N°" class="form-control">
                  </div>

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <span>Sexo:</span>
                    <select id="heard" class="form-control" required="">
                            <option value="">Choose..</option>
                            <option value="press">Masculino</option>
                            <option value="net">Femenino</option>
                            
                          </select>
                  </div>

                 </div>

                 <div class="x_content">
                  <div class="col-md-14 col-sm-12 col-xs-12 form-group">
                     <span>Objetivos:</span>
                  <textarea class="form-control" rows="3" placeholder="rows=&quot;3&quot;"></textarea>
                  </div>
                 </div>

                 <div class="x_content">

                  yield('contenido')

                 </div>

                 <div class="x_content">
                  <div class="col-md-14 col-sm-12 col-xs-12 form-group">
                     <span>Observaciones:</span>
                  <textarea class="form-control" rows="3" placeholder="rows=&quot;3&quot;"></textarea>
                  </div>
                 </div>

                </div>
              </div>
            </div>
</div>		
<?php $__env->startSection('content2'); ?>
<script>
$('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });
</script>
<?php $__env->stopSection(); ?>           
<?php $__env->stopSection(); ?>               
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>