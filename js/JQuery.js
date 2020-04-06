
$(document).ready(function () {
    
    $("#div-usuario").hide();
    $("#div-empresa").hide();

    $("#Usuario").click(function(){
        $("#div-empresa").hide();
        $("#div-usuario").slideToggle();
    });

    $("#Empresa").click(function(){
        $("#div-usuario").hide();
        $("#div-empresa").slideToggle();
    });


});




