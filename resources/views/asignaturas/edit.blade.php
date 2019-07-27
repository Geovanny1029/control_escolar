<!-- Add Modal start -->
    <div class="modal fade" id="editModala" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Editar Asignatura</h4>
          </div>
          <div class="modal-body">
              {!! Form::open(['route' => 'asignatura.actualiza', 'method' => 'POST']) !!}
              <div class="row">
                <div class="form-group col-md-6">
                 {!! Form::label('edit_Nombre_asignatura', 'Nombre Asignatura') !!} 
                 {!! Form::text('edit_Nombre_asignatura',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Nombre Asignatura','id' => 'edit_Nombre_asignatura','required' ] ) !!}
               </div>
                <div class="form-group col-md-6">
                {!! Form::label('edit_estatusa', 'Estatus') !!}  
                {!! Form::select('edit_estatusa',$listaE,null,['class'=>'form-control','id' => 'edit_estatusa']) !!} 
               </div>

              </div>

              <div class="row">
                <div class="form-group col-md-2">
                 {!! Form::submit('Actualizar',[ 'class' => 'btn btn-primary']) !!} 
                 <input type="hidden" id="edit_ida" name="edit_ida">
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