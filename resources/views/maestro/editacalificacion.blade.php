 <!-- Add Modal start -->
    <div class="modal fade" id="editModalsubedi" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edita y actualiza Calificaciones </h4>
          </div>
          <div class="modal-body">
              {!! Form::open(['route' => 'user.actualizasub', 'method' => 'POST']) !!}
              <div class="row">

               <div class="form-group col-md-3">
                 {!! Form::label('edit_C1', 'Calificacion 1') !!}  
                 {!! Form::text('edit_C1',null,['class' => 'form-control', 'placeholder' => 'Calificacion1', 'required' ] ) !!}
               </div>
               <div class="form-group col-md-3">
                 {!! Form::label('edit_C2', 'Calificacion 2') !!}  
                 {!! Form::text('edit_C2',null,['class' => 'form-control', 'placeholder' => 'Calificacion 2' ] ) !!}
               </div>
               <div class="form-group col-md-3">
                 {!! Form::label('edit_C3', 'Calificacion 3') !!}  
                 {!! Form::text('edit_C3',null,['class' => 'form-control', 'placeholder' => 'Calificacion' ] ) !!}
               </div>
               <div class="form-group col-md-3">
                 {!! Form::label('edit_C4', 'Calificacion 4') !!}  
                 {!! Form::text('edit_C4',null,['class' => 'form-control', 'placeholder' => 'Calificacion' ] ) !!}
               </div>
              </div>

              <div class="row">
                <div class="form-group col-md-2">
                 {!! Form::submit('Registrar',[ 'class' => 'btn btn-primary']) !!} 
                </div>
              </div>
               <input type="hidden" id="id_regsub" name="id_regsub" >
              {!! Form::close()!!}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
        
      </div>
    </div>
    <!-- add code ends -->