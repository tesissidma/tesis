	<div class="form-group">
		{!!Form::label('nombre','Nombre: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-6 col-sm-6 col-xs-12">
		{!!Form::text('name',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa el Nombre del usuario', 'required'=>'required'])!!}
		</div>
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-6 col-sm-6 col-xs-12">
		{!!Form::email('email',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa el Nombre del usuario', 'required'=>'required'])!!}
		</div>
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-6 col-sm-6 col-xs-12">
		{!!Form::password('password',['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa el Nombre del usuario', 'required'=>'required'])!!}
		</div>
	</div>


