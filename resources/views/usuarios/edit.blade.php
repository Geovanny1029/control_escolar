<!-- Add Modal start -->
    <div class="modal fade" id="editModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Editar Usuario</h4>
          </div>
          <div class="modal-body">
              {!! Form::open(['route' => 'user.actualiza', 'method' => 'POST']) !!}
              <div class="row">
               <div class="form-group col-md-6">
                 {!! Form::label('edit_usuario', 'Usuario') !!}  
                 {!! Form::text('edit_usuario',null,['class' => 'form-control', 'placeholder' => 'Usuario','id' => 'edit_usuario', 'required' ] ) !!}
               </div>
               <div class="form-group col-md-6">
                 {!! Form::label('edit_password', 'Contraseña') !!}  
                 {!! Form::text('edit_password',null,['class' => 'form-control', 'placeholder' => 'contraseña','id' => 'edit_password', 'required' ] ) !!}
               </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                 {!! Form::label('edit_Nombre_usuario', 'Nombres') !!} 
                 {!! Form::text('edit_Nombre_usuario',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Nombres','id' => 'edit_Nombre_usuario','required' ] ) !!}
               </div>
                <div class="form-group col-md-6">
                 {!! Form::label('edit_apellidos', 'Apellidos') !!} 
                 {!! Form::text('edit_apellidos',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Apellidos','id' => 'edit_apellidos','required' ] ) !!}
               </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                {!! Form::label('edit_nivel', 'Nivel') !!}  
                {!! Form::select('edit_nivel',$listaN,null,['class'=>'form-control','id' => 'edit_nivel']) !!} 
               </div>
                <div class="form-group col-md-6">
                {!! Form::label('edit_estatus', 'Estatus') !!}  
                {!! Form::select('edit_estatus',$listaE,null,['class'=>'form-control','id' => 'edit_estatus']) !!} 
               </div>
              </div>

              <div class="row">
                <div class="form-group col-md-2">
                 {!! Form::submit('Actualizar',[ 'class' => 'btn btn-primary']) !!} 
                 <input type="hidden" id="edit_id" name="edit_id">
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