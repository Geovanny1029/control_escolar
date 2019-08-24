 <!-- Add Modal start -->
    <div class="modal fade" id="addModalr" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Alta Relacion</h4>
          </div>
          <div class="modal-body">
              {!! Form::open(['route' => 'relacion_control.store', 'method' => 'POST']) !!}
              <div class="row">
               <div class="form-group col-md-6">
                {!! Form::label('Grupo', 'Grupo') !!} 
                {!! Form::select('id_grupo',$listaG,null,['class' => 'form-control']) !!}
               </div>
               <div class="form-group col-md-6">
                {!! Form::label('Asignatura', 'Asignatura') !!} 
                {!! Form::select('id_asignatura',$listaA,null,['class' => 'form-control']) !!}
                </div>
              </div>

              <div class="row">
               <div class="form-group col-md-6">
                {!! Form::label('Periodo', 'Periodo') !!} 
                {!! Form::select('id_periodo',$listaP,null,['class' => 'form-control']) !!}
               </div>
               <div class="form-group col-md-6">
                {!! Form::label('Maetsro', 'Maetsro') !!} 
                {!! Form::select('id_maestro',$listaMa,null,['class' => 'form-control']) !!}
               </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                {!! Form::label('Alumno', 'Alumno') !!} 
                {!! Form::select('id_alumno',$listaAl,null,['class' => 'form-control']) !!}
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