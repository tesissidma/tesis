	<div class="form-group">
		<?php echo Form::label('nombre','Nombre: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>

		<div class="col-md-6 col-sm-6 col-xs-12">
		<?php echo Form::text('name',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa el Nombre del usuario', 'required'=>'required']); ?>

		</div>
	</div>
	<div class="form-group">
		<?php echo Form::label('email','Correo: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>

		<div class="col-md-6 col-sm-6 col-xs-12">
		<?php echo Form::email('email',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa el Nombre del usuario', 'required'=>'required']); ?>

		</div>
	</div>
	<div class="form-group">
		<?php echo Form::label('password','Contraseña: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>

		<div class="col-md-6 col-sm-6 col-xs-12">
		<?php echo Form::password('password',['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa el Nombre del usuario', 'required'=>'required']); ?>

		</div>
	</div>


