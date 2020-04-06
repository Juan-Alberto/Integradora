
$(document).ready(function () {
    
    $('#btnEntrar').click(function(){

        var usuario = $("#Iuser").val();
        var password = $("#Ipass").val();

        if(usuario == ""){
            $('#mensajes1').fadeIn();
            return false;
        } else {
            $('#mensajes1').fadeOut();

            if(password == ""){
                $('#mensajes2').fadeIn();
                return false;
            } else{
                $('#mensajes1').fadeOut();

            }
        }
    });
});