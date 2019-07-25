$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
});

//vista editar usuario
function fun_edit(id)
    {
      var view_url = $("#editar").val();
      $.ajax({
        url: view_url,
        type:"GET", 
        data: {"id":id}, 
        success: function(result){
          //console.log(result);
          $("#edit_usuario").val(result.usuario);
          $("#edit_password").val(result.backup_pass);
          $("#edit_Nombre_usuario").val(result.nombres);
          $("#edit_apellidos").val(result.apellidos);
          $("#edit_nivel").val(result.nivel);
          $("#edit_estatus").val(result.estatus);
          $("#edit_id").val(result.id);
        }
      });
    }
