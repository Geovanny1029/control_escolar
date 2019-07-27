<!-- Add Modal start -->
    <div class="modal fade" id="editModalr" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Editar</h4>
          </div>
          <div class="modal-body">
              {!! Form::open(['route' => 'relacion_control.actualiza', 'method' => 'POST']) !!}
              <div class="row">
                <div class="form-group col-md-6">
                {!! Form::label('edit_gruposel', 'Grupo') !!}  
                {!! Form::select('edit_gruposel',$listaG,null,['class'=>'form-control','id' => 'edit_gruposel']) !!} 
               </div>
                <div class="form-group col-md-6">
                {!! Form::label('edit_asignaturasel', 'Asignatura') !!}  
                {!! Form::select('edit_asignaturasel',$listaA,null,['class'=>'form-control','id' => 'edit_asignaturasel']) !!} 
               </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                {!! Form::label('edit_periodosel', 'Periodosel') !!}  
                {!! Form::select('edit_periodosel',$listaP,null,['class'=>'form-control','id' => 'edit_periodosel']) !!} 
               </div>
                <div class="form-group col-md-6">
                {!! Form::label('edit_maestrosel', 'Maestro') !!}  
                {!! Form::select('edit_maestrosel',$listaMa,null,['class'=>'form-control','id' => 'edit_maestrosel']) !!} 
               </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                {!! Form::label('edit_alumnosel', 'Alumno') !!}  
                {!! Form::select('edit_alumnosel',$listaAl,null,['class'=>'form-control','id' => 'edit_alumnosel']) !!} 
               </div>
              </div>

              <div class="row">
                <div class="form-group col-md-2">
                 {!! Form::submit('Actualizar',[ 'class' => 'btn btn-primary']) !!} 
                 <input type="hidden" id="edit_idr" name="edit_idr">
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