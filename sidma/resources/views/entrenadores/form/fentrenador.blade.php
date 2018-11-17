	<div class="form-group">
		{!!Form::label('cedula','Cedula: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-6 col-sm-6 col-xs-12">
		{!!Form::text('cedula',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa el Cedula', 'required'=>'required'])!!}
		</div>
	</div>
	<div class="form-group">
		{!!Form::label('apellidos','Apellidos: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-6 col-sm-6 col-xs-12">
		{!!Form::text('apellidos',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa los apellidos', 'required'=>'required'])!!}
		</div>
	</div>
	<div class="form-group">
		{!!Form::label('nombres','Nombres: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-6 col-sm-6 col-xs-12">
		{!!Form::text('nombres',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa los nombres', 'required'=>'required'])!!}
		</div>
	</div>
	

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo *:</label>
<div class="col-md-6 col-sm-6 col-xs-12">
                      <p>
                        Masculino:
                        <input type="radio" class="flat" name="gender" id="genderM" value="M" required /> Femenino:
                        <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                      </p>
</div>
</div>
 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Etnia: *</label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" required='required'>
                            <option>ff</option>
                            
                          </select>
                        </div>

                      </div>

<div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Localidad: *</label>
                        <div class="col-md-2 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" required='required'>
                            <option>Pais</option>
                            
                          </select>
                        </div>
                        <label class="control-label col-md-1 col-sm-3 col-xs-12"></label>
                        <div class="col-md-2 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" required='required'>
                            <option>Provincia</option>
                            
                          </select>
                        </div>
                        <label class="control-label col-md-1 col-sm-3 col-xs-12"></label>
                        <div class="col-md-2 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" required='required'>
                            <option>Canton</option>
                            
                          </select>
                        </div>
                      </div>

<div class="form-group">
		{!!Form::label('localidad','Localidad: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-3 col-sm-6 col-xs-12">
		{!!Form::text('localidad',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa Localidad', 'required'=>'required'])!!}
		</div>
	</div>

                    <div class="form-group">
                    	<label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha Nacimiento: *</label>
                    	<div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="input-group date" id='myDatepicker2'>
                            <input type='text' class="form-control col-md-7 col-xs-12" required='required'/>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    </div>
 <div class="form-group">
		{!!Form::label('tiposangre','Tipo de Sangre: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-3 col-sm-6 col-xs-12">
		{!!Form::text('tiposangre',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa Tipo de Sangre', 'required'=>'required'])!!}
		</div>
	</div>


	<div class="form-group">
		{!!Form::label('calleprincipal','Calle Principal: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-6 col-sm-6 col-xs-12">
		{!!Form::text('calleprincipal',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa Calle Principal', 'required'=>'required'])!!}
		</div>
	</div>

	<div class="form-group">
		{!!Form::label('callesecundaria','Calle Secundaria: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-6 col-sm-6 col-xs-12">
		{!!Form::text('callesecundaria',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa Calle Secundaria', 'required'=>'required'])!!}
		</div>
	</div>

	<div class="form-group">
		{!!Form::label('referencia','Referencia: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-6 col-sm-6 col-xs-12">
		{!!Form::text('referencia',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa Referencia', 'required'=>'required'])!!}
		</div>
	</div>

	<div class="form-group">
		{!!Form::label('telefono','Telefono: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-3 col-sm-6 col-xs-12">
		{!!Form::text('telefono',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa Telefono', 'required'=>'required'])!!}
		</div>
	</div>

	<div class="form-group">
		{!!Form::label('estadosocial','Estado Social: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-6 col-sm-6 col-xs-12">
		{!!Form::text('estadosocial',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa Estado Social', 'required'=>'required'])!!}
		</div>
	</div>

<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nivel Educativo: *</label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" required='required'>
                            <option>fff</option>
                            
                          </select>
                        </div>
                      </div>

	<div class="form-group">
		{!!Form::label('estabilidadsocial','Estabilidad Social: *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])!!}
		<div class="col-md-6 col-sm-6 col-xs-12">
		{!!Form::text('estabilidadsocial',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Ingresa Estabilidad Social', 'required'=>'required'])!!}
		</div>
	</div>

<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado Civil: *</label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1" required='required'>
                            <option>sss</option>
                            
                          </select>
                        </div>
                      </div>

<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Discapacidad: </label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>sss</option>
                            
                          </select>
                        </div>
                      </div>

@section('content2')
<script>
$('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });
</script>
@endsection

              