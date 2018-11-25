@extends('layout.layout')
@section('content')
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

                 <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Dificultad</th>
                          <th>Tiempo en el area</th>
                          <th>sexo</th>
                          <th>Canton</th>
                          <th>Motivo de la baja</th>
                          <th>Medidad tomadas</th>
                          <th>Recomen.</th>
                          <th>Obs.</th>
                          <th>Accion</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Manabi Tecnologico</td>
                          <td>Manabi Tecnologico</td>
                          <td><button type="button" class="btn btn-xs btn-success  "  data-toggle="modal" data-target="#exampleModal">Ver</button>
                            <button type="button" class="btn btn-xs btn-primary  "  data-toggle="modal" data-target="#exampleModal">Editar</button>
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">Eliminar</button></td>
                          
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Olmedo</td>
                          <td>Manabi Tecnologico</td>
                          <td><button type="button" class="btn btn-xs btn-success  "  data-toggle="modal" data-target="#exampleModal">Ver</button>
                            <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Editar</button>
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">Eliminar</button></td>
                         
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Gran Colombia</td>
                          <td>Manabi Tecnologico</td>
                          <td><button type="button" class="btn btn-xs btn-success  "  data-toggle="modal" data-target="#exampleModal">Ver</button>
                            <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Editar</button>
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">Eliminar</button></td>
                          
                        </tr>
                      </tbody>
                    </table>
				


			 </div>
                </div>
              </div>
            </div>
</div>		
                 
@endsection               