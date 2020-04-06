/* VALIDACION NUMEROS*/

$(document).ready(function () {

    $('#numero').on('input', function(){ 

        if(this.value = this.value.replace(/[^0-9]/g,'')){
            $("#mensaje1").text("Recuerda que solo son numeros").fadeIn().css("color", "green").css("font-size","13px");         

        } else {
            $("#mensaje1").text("¡Lo sentimos! Ingresa solo numeros").fadeIn().css("color", "red").css("font-size","13px");
            $("#mensaje1").fadeOut();             
        }
    });



    $('#nombre').on('keypress', function (e) {
        if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ ]*$/.test(e.target.value)) {
            e.preventDefault();
            $("#mensaje2").text("¡Lo sentimos! Ingresaste un numero").fadeIn().css("color", "red").css("font-size","13px");
            $("#mensaje2").fadeOut(2000);  
        }
    });

    $('#appat').on('keypress', function (e) {
        if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ ]*$/.test(e.target.value)) {
            e.preventDefault();
            $("#mensaje3").text("¡Lo sentimos! Ingresaste un numero").fadeIn().css("color", "red").css("font-size","13px");
            $("#mensaje3").fadeOut(2000);  
        }
    });

    $('#apmat').on('keypress', function (e) {
        if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ ]*$/.test(e.target.value)) {
            e.preventDefault();
            $("#mensaje4").text("¡Lo sentimos! Ingresaste un numero").fadeIn().css("color", "red").css("font-size","13px");
            $("#mensaje4").fadeOut(2000);  
        }
    });



    var mayusculas = new RegExp("^(?=.*[A-Z])");
    var especial = new RegExp("^(?=.*[!@#$&*])");
    var numeros = new RegExp("^(?=.*[0-9])");
    var minusculas = new RegExp("^(?=.*[a-z])");
    var maximo = new RegExp("^(?=.{8,})");


    $("#pass").keyup(function () {    
        var pass = $("#pass").val();

        if(mayusculas.test(pass) && especial.test(pass) && numeros.test(pass) && minusculas.test(pass) && maximo.test(pass)){
            $("#mensaje").text("¡Genial! tu contraseña es Segura").fadeIn().css("color", "green").css("font-size","13px");
            return false;
        } else if(mayusculas.test(pass) && especial.test(pass) && numeros.test(pass)){
            $("#mensaje").text("¡Bueno! tu contraseña es debil").fadeIn().css("color", "yellow").css("font-size","13px");
            return false;  
        } else{
            $("#mensaje").text("¡Oh! tu contraseña es insegura debe contener mayuscula,ninuscula,numero y caracter especial")
            .fadeIn().css("color", "red").css("font-size","13px");        
        }
    });

    $('#confP').keyup(function() {

        var password = $('#pass').val();
        var confP = $('#confP').val();

        if ( password == confP ) {
            $('#error2').text(" Las contraseñas coinciden").css("color","green").css("font-size","13px");
        } else {    
            $('#error2').text("Las contraseñas No coinciden!").css("color","red").css("font-size","13px");
        }
        if(confP == ""){
            $('#error2').text("No se puede dejar en blanco").css("color","red").css("font-size","13px");
        }

    });

    $('#nombre').on('keypress', function (e) {
       $("#nombre").css("border","1px solid #E8EAED");
   });

    $('#appat').on('keypress', function (e) {
       $("#appat").css("border","1px solid #E8EAED");
   });

    $('#apmat').on('keypress', function (e) {
       $("#apmat").css("border","1px solid #E8EAED");
   });

    $('#numero').on('keypress', function (e) {
       $("#numero").css("border","1px solid #E8EAED");
   });

    $('#correo').on('keypress', function (e) {
       $("#correo").css("border","1px solid #E8EAED");
   });

    $('#lic').on('change', function (e) {
       $("#lic").css("border","1px solid #E8EAED");
   });

    $('#ine').on('change', function (e) {
       $("#ine").css("border","1px solid #E8EAED");
   });


    $('#nomU').on('keypress', function (e) {
       $("#numero").css("border","1px solid #E8EAED");
   });


});



function control(f){
    var ext=['pdf'];
    var v=f.value.split('.').pop().toLowerCase();
    for(var i=0,n;n=ext[i];i++){
        if(n.toLowerCase()==v)
            return
    }

    var t=f.cloneNode(true);
    t.value='';
    f.parentNode.replaceChild(t,f);

    $("#mensaje5").text("¡Lo sentimos! solo archivos pdf").fadeIn().css("color", "red").css("font-size","13px");
    $("#mensaje5").fadeOut(2000);

    
}



function Gform(){

    var nom     = document.getElementById("nombre").value;
    var appat   = document.getElementById("appat").value;
    var apmat   = document.getElementById("apmat").value;
    var numero  = document.getElementById("numero").value;
    var correo  =document.getElementById("correo").value;
    var lic     = document.getElementById("lic").value;
    var ine     = document.getElementById("ine").value;
    var nomU    = document.getElementById("nomU").value;
    var password     =document.getElementById("pass").value;
    var confP        =document.getElementById("confP").value;
    var cchecked     = document.getElementById('terminos').checked;

     if(nom==""){
        $("#nombre").css("border","1px solid red");
        $("#mensaje2").text("El campo nombre es requerido").css("color", "red").css("font-size","13px");
        $("#mensaje2").fadeOut(2000);
        return false;   
    }

     if(appat==""){
        $("#appat").css("border","1px solid red");
        $("#mensaje3").text("El campo Apellido Paterno es requerido").css("color", "red").css("font-size","13px");
        $("#mensaje3").fadeOut(2000);
        return false;   
    }

     if(apmat==""){
        $("#apmat").css("border","1px solid red");
        $("#mensaje4").text("El campo Apellido Materno es requerido").css("color", "red").css("font-size","13px");
        $("#mensaje4").fadeOut(2000);
        return false;   
    }

     if(numero==""){
        $("#numero").css("border","1px solid red");
        $("#mensaje1").text("El campo Numero Telefonico es requerido").css("color", "red").css("font-size","13px");
        $("#mensaje1").fadeOut(2000);
        return false;     
    }

     if(correo==""){
        $("#correo").css("border","1px solid red");
        $("#mensaje7").text("El campo Correo es requerido").css("color", "red").css("font-size","13px");
        $("#mensaje7").fadeOut(2000);
        return false;     
    }

    if(ine==""){
      $("#ine").css("border","1px solid red");
        $("#mensaje5").text("Debes subir tu INE").css("color", "red").css("font-size","13px");
        $("#mensaje5").fadeOut(2000);
        return false;   
    }

    if(lic==""){
      $("#lic").css("border","1px solid red");
        $("#mensaje8").text("Debes subir tu LICENCIA DE CONDUCIR").css("color", "red").css("font-size","13px");
        $("#mensaje8").fadeOut(2000);
        return false;   
    }

     if(nomU==""){
      $("#nomU").css("border","1px solid red");
        $("#mensaje9").text("El campo Elige un usuario es requerido").css("color", "red").css("font-size","13px");
        $("#mensaje9").fadeOut(2000);
        return false; 
    }

     if(password==""){
      $("#password").css("border","1px solid red");
        $("#error1").text("El campo contraseña es requerido").css("color", "red").css("font-size","13px");
        $("#error1").fadeOut(2000);
        return false; 
    }

     if(confP==""){
      $("#confP").css("border","1px solid red");
        $("#error2").text("El campo Confirma contraseña es requerido").css("color", "red").css("font-size","13px");
        $("#error2").fadeOut(2000);
        return false;  
    }

    if(!password==confP){
        $("#error2").text("Las contraseñas deben ser iguales").fadeIn().css("color", "red").css("color","#FFF");
        $("#error2").fadeOut(2000);
        return false;
    }


    if(cchecked==false){
        $("#mensaje6").text("Debes aceptar los terminos y condiciones").css("color", "red").css("font-size","13px");
        $("#mensaje6").fadeOut(2000);
        return false; 
    }

} 













/*function valT(e){

    key=e.KeyCode || e.wich;
    teclado=String.fromCharCode(Key).toUpperCase();
    letras = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ";
    especiales= "8-37-38-46-164";
    teclado_especial= false;

    for(var i in especiales){

        if(Key==especiales[i]){
            teclado_especial=true;break;
        }
    }
    if(letras.indexOf(teclado)==-1 && !teclado_especial){
        return false;
    }
*/



