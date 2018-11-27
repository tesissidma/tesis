<!-- Button trigger modal -->
<button type="button" class="btn btn-primary fa fa-plus-circle" data-toggle="modal" data-target="#exampleModalLong">
  Nuevo
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" id="exampleModalLongTitle">Registrar nueva matroz de problemas</h3>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
           @include('metodologo.form.fmatrizdeproblemas')
                  </div>

        </div>
      </div>
      
    </div>
  </div>
</div>