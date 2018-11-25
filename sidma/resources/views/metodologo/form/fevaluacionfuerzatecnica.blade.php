<div class="form-group">
<table id="NivelesEstudios1" class="table table-bordered" style="text-align: center;">
                      <thead>
                        <tr>
                          <th style="text-align: center;">No</th>
                          <th style="text-align: center;">Entrenador</th>
                          <th style="text-align: center;">Deporte</th>
                          <th style="text-align: center;">Acción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <td>1</td>
                          <td>Fulano de tal</td>
                          <td>Deporte 1</td>
                          <td><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#exampleModal">Realizar Evaluación</button></td>
                          
                        </tr>
                        <tr>
                          
                          <td>2</td>
                          <td>Fulano de tal 2</td>
                          <td>Deporte 2</td>
                          <td><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#exampleModal">Realizar Evaluación</button></td>
                         
                        </tr>
                        
                      </tbody>
                    </table>
</div>



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
          
          <div class="x_panel">
                  <div class="x_title">
                    <h2>Datos de Evaluación</h2>
                    <div class="clearfix"></div>
                  </div>
                    
                  <div class="x_content">

                  <div class="col-md-5 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="Entrenador" class="form-control" disabled>
                  </div>

                  <div class="col-md-5 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="Deporte" class="form-control" disabled>
                  </div>

                  </div>

                  <div class="x_content">
                    <br />

                  <div class="x_title">  
                  <h2>Cumplimiento</h2>
                  <div class="clearfix"></div>
                  </div>
                  
                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <lavel>CP:</lavel> 
                    <input type="text" placeholder="" class="form-control">
                  </div>
                  <div class="col-md-2 col-sm-12 col-xs-12 form-group" style="margin-left: 2%;">
                    <lavel>R.D:</lavel> 
                    <input type="text" placeholder="" class="form-control">
                  </div>
                  <div class="col-md-2 col-sm-12 col-xs-12 form-group" style="margin-left: 2%;">
                    <lavel>ST:</lavel> 
                    <input type="text" placeholder="" class="form-control">
                  </div>
                  <div class="col-md-2 col-sm-12 col-xs-12 form-group" style="margin-left: 2%;">
                    <lavel>PD:</lavel> 
                    <input type="text" placeholder="" class="form-control">
                  </div>
                  <div class="col-md-2 col-sm-12 col-xs-12 form-group" style="margin-left: 2%;">
                    <lavel>CS:</lavel> 
                    <input type="text" placeholder="" class="form-control">
                  </div>
                  


                  
                 </div>

                 <div class="x_content">
                 <br />

                 <div class="x_title"> 
                 <h2>Evaluación</h2>
                 <div class="clearfix"></div>
                  </div>

                 <div class="col-md-6 col-sm-6 col-xs-12">
                  
                      
                        <lavel>Muy Bueno:<lave>
                        <input type="radio" class="flat" name="evalu" id="evaluMB" value="MB" required /> 
                        <lavel>Bueno:</lavel>
                        <input type="radio" class="flat" name="evalu" id="evaluB" value="B"/>
                        <lavel>Regular:</lavel>
                        <input type="radio" class="flat" name="evalu" id="evaluR" value="R"/>
                        <lavel>Malo:</lavel>
                        <input type="radio" class="flat" name="evalu" id="evaluM" value="M"/>
                     

                  </div>
                 
                 </div>

                 <div class="x_content">
                  <br />
                  

                 <div class="form-group">
                        <div class="col-md-12 col-sm-9 col-xs-12">
                          <lavel>Observaciones:</lavel> 
                          <textarea class="form-control" rows="3" placeholder="rows=&quot;3&quot;"></textarea>
                        </div>
                      </div>

                 </div>
            </div>
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