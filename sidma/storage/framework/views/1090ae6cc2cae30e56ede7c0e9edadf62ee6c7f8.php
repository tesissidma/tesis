<div class="form-group">
<table id="NivelesEstudios1" class="table table-bordered" style="text-align: center;">
                      <thead>
                        <tr>
                          <th style="text-align: center;">No</th>
                          <th style="text-align: center;">Entrenador</th>
                          <th style="text-align: center;">Deporte</th>
                          <th style="text-align: center;">No. Atletas que Atiende</th>
                          <th style="text-align: center;">Categoría</th>
                          <th style="text-align: center;">Acción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <td>1</td>
                          <td>Fulano de tal</td>
                          <td>Deporte 1</td>
                          <td>50</td>
                          <td>senior</td>
                          <td><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#exampleModal">Asignar Lugar de Trabajo</button></td>
                          
                        </tr>
                        <tr>
                          
                          <td>2</td>
                          <td>Fulano de tal 2</td>
                          <td>Deporte 2</td>
                          <td>50</td>
                          <td>senior</td>
                          <td><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#exampleModal">Asignar Lugar de Trabajo</button></td>
                         
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
                    <h2>Datos Para Asignación de Lugar de Trabajo</h2>
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

                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" placeholder="No. Atletas" class="form-control" disabled>
                  </div>

                  <div class="col-md-5 col-sm-12 col-xs-12 form-group" style="margin-left: 25%;">
                    <input type="text" placeholder="Categoría del Deporte" class="form-control" disabled>
                  </div>

                  </div>

                  <div class="x_content">
                    <br />
                  
                  
                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  <lavel>Lugar de Trabajo:</lavel> 
                  <select id="heard" class="form-control" required="">
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select>
                  </div>                 
                  
                  </div>

                  <div class="x_content">

                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  <lavel>Dia:</lavel> 
                  <select id="heard" class="form-control" required="">
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select>
                  </div>

                  </div>

                  <div class="x_content">

                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  <lavel>Desde:</lavel> 
                  <select id="heard" class="form-control" required="">
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  <lavel>Hasta:</lavel> 
                  <select id="heard" class="form-control" required="">
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select>
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