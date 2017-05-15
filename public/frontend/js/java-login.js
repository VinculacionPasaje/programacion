$("#login").click(function(){
    var form = $('#form');
    var route = window.location+'login';
    var token = $("#token").val();
    var dato = form.serialize();
    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data:dato,
        success:function(msje){
            if (msje.mensaje==="exito"){
                window.location.href='base';
            }
            else if (msje.mensaje==="error"){
                $("#error_identificacion").html("");
                $("#error_password").html("");
                $('#error').show();
            }


        },
        error:function(msj){
            $("#error_identificacion").html("");
            $("#error_password").html("");
            $('#error').hide();
            $.each(msj.responseJSON, function(i, field){
                if(i==="identificacion"){
                    $("#error_identificacion").html(field);
                }
                else if(i==="password"){
                    $("#error_password").html(field);
                }
            });
        }
    });
});
