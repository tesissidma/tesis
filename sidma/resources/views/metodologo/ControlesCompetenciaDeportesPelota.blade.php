@extends('metodologo.form.EncabezadoControlesCompetencia')
@section('contenido')

<table id="tiemposymarcas" class="table table-bordered table-responsive-md table-striped text-center" style="text-align: center;">
                      <thead>
                        <tr>
						  <th ROWSPAN="2" style="text-align: center; vertical-align:middle;">N°</th>
                          <th ROWSPAN="2" style="text-align: center; vertical-align:middle;">Nombres y Apellidos</th>
                          <th COLSPAN="4" style="text-align: center; vertical-align:middle;">Eval. de la Prep.</th>
                          <th ROWSPAN="2" style="text-align: center; vertical-align:middle;">Lugar Prop</th>
                          <th COLSPAN="6" style="text-align: center; vertical-align:middle;">Resultados</th>
                          <th COLSPAN="1" style="text-align: center; vertical-align:middle;">Resultados Finales</th>
                          <th ROWSPAN="2" style="text-align: center; vertical-align:middle;">Acción</th>
                          
                        </tr>
                        <tr>
                          
                          <th style="text-align: center; vertical-align:middle;">P.F</th>

                          <th style="text-align: center; vertical-align:middle;">P.T.T</th>

                          <th style="text-align: center; vertical-align:middle;">P.Ps</th>

                          <th style="text-align: center; vertical-align:middle;">DISC</th> 

                          <th style="text-align: center; vertical-align:middle;">P.G</th>

                          <th style="text-align: center; vertical-align:middle;">P.E</th>

                          <th style="text-align: center; vertical-align:middle;">P.P</th>

                          <th style="text-align: center; vertical-align:middle;">% EFECT.</th>

                          <th style="text-align: center; vertical-align:middle;">PTOS FAV</th>

                          <th style="text-align: center; vertical-align:middle;">PTOS CONT</th>

                          <th style="text-align: center; vertical-align:middle;">Ubicación.</th>


                        </tr>


                      </thead>
                      <tbody>


                       <tr>
                       	  <td style="text-align: center; vertical-align:middle;" class="pt-3-half">1</td>
				          <td style="text-align: center; vertical-align:middle;" class="pt-3-half">Guadalupe House Guadalupe House</td>
				          <td style="text-align: center; vertical-align:middle;" class="pt-3-half" contenteditable="true"></td>
				          <td style="text-align: center; vertical-align:middle;" class="pt-3-half" contenteditable="true"></td>
				          <td style="text-align: center; vertical-align:middle;" class="pt-3-half" contenteditable="true"></td>
				          <td style="text-align: center; vertical-align:middle;" class="pt-3-half">26</td>      
				          <td style="text-align: center; vertical-align:middle;" class="pt-3-half"><input type="number" value="50" min="0" max="100" step="10"/></td>
				          <td style="text-align: center; vertical-align:middle;" class="pt-3-half" contenteditable="true"></td>
				          <td style="text-align: center; vertical-align:middle;" class="pt-3-half" contenteditable="true"></td>
				          <td style="text-align: center; vertical-align:middle;" class="pt-3-half" contenteditable="true"></td>
				          <td style="text-align: center; vertical-align:middle;" class="pt-3-half" contenteditable="true"></td>
				          <td style="text-align: center; vertical-align:middle;"class="pt-3-half" contenteditable="true"></td>
                  <td style="text-align: center; vertical-align:middle;"class="pt-3-half" contenteditable="true"></td>
				          <td style="text-align: center; vertical-align:middle;" ><select id="heard" class="form-control" required="">
                            <option value="">Choose..</option>
                            <option value="press">1</option>
                            <option value="net">2</option>
                            <option value="net">3</option>
                            <option value="net">4</option>
                          </select></td>
                          <td style="text-align: center; vertical-align:middle;"class="pt-3-half"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Quitar Atleta</button></td>
				        </tr>

                        
                      </tbody>
                    </table>


<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <br>
          
         
                 
            
          <br>
          <br>
      </div>
      <div class="modal-footer"><center>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button></center>
      </div>
    </div>
  </div>
</div>

@section('content2')
<script>
$('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });

$("#div").html('Deportes con Pelota');

</script>
@endsection

@endsection