$(document).ready(function(){

    $("#bloqueFormulario").hide();

    $(document).on("click", "#mostrarYOcultar", function(){

      $("#bloqueFormulario").toggle();

    });

    $("#tablaUsuarios").DataTable();



    //Envio de data

    $(document).on("click", "#enviarData", function(){

        var info = JSON.stringify($("#bloqueFormulario :input").serializeArray());

        $.ajax({
            
            type:"POST",
            dataType:"JSON",
            data: {info:info, key:"agregar"},
            url:"../controllers/usuarioController.php"

        }).done(function(data){

            console.log(data)
        if(data.estado){

            alert(data.mensaje);
            location.reload();
        }


        }).fail(function(){


        });
      

    });





});