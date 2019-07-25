 <!-- Add Modal start -->
    <div class="modal fade" id="addModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Usuario</h4>
          </div>
          <div class="modal-body">
              {!! Form::open(['route' => 'user.store', 'method' => 'POST']) !!}
              <div class="row">
               <div class="form-group col-md-6">
                 {!! Form::label('usuario', 'Usuario') !!}  
                 {!! Form::text('usuario',null,['class' => 'form-control', 'placeholder' => 'Usuario', 'required' ] ) !!}
               </div>
               <div class="form-group col-md-6">
                {!! Form::label('password', 'Contraseña') !!}  
                {!! Form::password('password',['class' => 'form-control', 'placeholder' => '*******', 'required' ] ) !!}
               </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                 {!! Form::label('Nombre_usuario', 'Nombres') !!} 
                 {!! Form::text('Nombre_usuario',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Nombres', 'required' ] ) !!}
               </div>
               <div class="form-group col-md-6">
                 {!! Form::label('Apellido_usuario', 'Apellidos') !!} 
                 {!! Form::text('Apellido_usuario',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Apellidos', 'required' ] ) !!}
               </div>

              </div>

              <div class="row">
                <div class="form-group col-md-6">
                {!! Form::label('Nivel', 'Nivel') !!} 
                {!! Form::select('nivel',$listaN,null,['class' => 'form-control']) !!}
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
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    <!-- add code ends -->