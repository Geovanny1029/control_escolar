<!-- Add Modal start -->
    <div class="modal fade" id="editModalg" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Editar Grupo</h4>
          </div>
          <div class="modal-body">
              {!! Form::open(['route' => 'grupo.actualiza', 'method' => 'POST']) !!}
              <div class="row">
                <div class="form-group col-md-6">
                 {!! Form::label('edit_Nombre_grupo', 'Nombre Grupo') !!} 
                 {!! Form::text('edit_Nombre_grupo',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Nombre Grupo','id' => 'edit_Nombre_grupo','required' ] ) !!}
               </div>
                <div class="form-group col-md-6">
                {!! Form::label('edit_estatusg', 'Estatus') !!}  
                {!! Form::select('edit_estatusg',$listaE,null,['class'=>'form-control','id' => 'edit_estatusg']) !!} 
               </div>

              </div>

              <div class="row">
                <div class="form-group col-md-2">
                 {!! Form::submit('Actualizar',[ 'class' => 'btn btn-primary']) !!} 
                 <input type="hidden" id="edit_idg" name="edit_idg">
                </div>
              </div>

              {!! Form::close()!!}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    <!-- add code ends -->