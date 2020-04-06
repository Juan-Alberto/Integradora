jQuery(document).on("submit", "#formularioL", function(event) {
    event.preventDefault();

    $.ajax({
        url: 'php/validacion.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){
            $('.entrar').val("Validando");
        }

    })

    .done(function(respuesta){
        console.log(respuesta.responseText);
        if (!respuesta.error) {
            if (respuesta.tipo== 2) {
                location='view/empresa/index.php';
            }else if (respuesta.tipo==1) {
                location='view/usuario/index.php';
            }
            }else {
                $('.error').slideToggle();
                setTimeout(function(){
                $('.error').slideUp('slow');
                },3000);
                $('.entrar').val('Iniciar Seción');
                }

    })
    
    .fail(function(resp) {
        console.log(resp.responseText);
        

    })
    .always(function(){
        console.log("complete");
    });

    
});





