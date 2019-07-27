<!-- Add Modal start -->
    <div class="modal fade" id="editModalp" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Editar Periodo</h4>
          </div>
          <div class="modal-body">
              {!! Form::open(['route' => 'periodo.actualiza', 'method' => 'POST']) !!}
              <div class="row">
                <div class="form-group col-md-6">
                 {!! Form::label('edit_Nombre_periodo', 'Periodo') !!} 
                 {!! Form::text('edit_Nombre_periodo',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Periodo','id' => 'edit_Nombre_periodo','required' ] ) !!}
               </div>
                <div class="form-group col-md-6">
                {!! Form::label('edit_estatusp', 'Estatus') !!}  
                {!! Form::select('edit_estatusp',$listaE,null,['class'=>'form-control','id' => 'edit_estatusp']) !!} 
               </div>

              </div>

              <div class="row">
                <div class="form-group col-md-2">
                 {!! Form::submit('Actualizar',[ 'class' => 'btn btn-primary']) !!} 
                 <input type="hidden" id="edit_idp" name="edit_idp">
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