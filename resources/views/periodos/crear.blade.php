 <!-- Add Modal start -->
    <div class="modal fade" id="addModalp" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Periodo</h4>
          </div>
          <div class="modal-body">
              {!! Form::open(['route' => 'periodo.store', 'method' => 'POST']) !!}

              <div class="row">
                <div class="form-group col-md-6">
                 {!! Form::label('Nombre_periodo', 'Periodo') !!} 
                 {!! Form::text('Nombre_periodo',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Periodo', 'required' ] ) !!}
               </div>
               <div class="form-group col-md-6">
                {!! Form::label('Estatus', 'Estatus') !!} 
                {!! Form::select('estatus',$listaE,null,['class' => 'form-control']) !!}
               </div>
              </div>

              <div class="row">
                <div class="form-group col-md-2">
                 {!! Form::submit('Registrar',[ 'class' => 'btn btn-primary']) !!} 
                </div>
              </div>

              {!! Form::close()!!}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
        
      </div>
    </div>
    <!-- add code ends -->