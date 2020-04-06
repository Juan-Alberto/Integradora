function validateForm(){

	var pname = document.getElementById('name').value;
	var pstreet = document.getElementById('street').value;
	var pnumext = document.getElementById('numext').value;
	var pcolonia = document.getElementById('colonia').value;
	var pmuni = document.getElementById('muni').value;
	var ppostcode = document.getElementById('postcode').value;
	var pphone = document.getElementById('phone').value;
	var cchecked = document.getElementById('terminos').checked;
	var pemail = document.getElementById('email').value;
	var puser = document.getElementById('user').value;
	var ppass = document.getElementById('pass').value;
	var ppass2 = document.getElementById('pass2').value;



if(pnumext==null||pnumext.length==0||!/^([0-9])*$/.test(pnumext)){
 $("#mensaje4").text("¡Lo sentimos! Ingresa solo numeros").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje4").fadeOut(); 
		return false;
	}



if(pname == null || pname.length == 0 || /^[a-z][a-z]*/.test(pname)==false){
 $("#mensaje2").text("¡Lo sentimos! Ingresa solo letras").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje2").fadeOut(); 
		return false;
	} 



	if(pstreet == null || pstreet.length == 0 || /^[a-z][a-z]*/.test(pstreet)==false){
 $("#mensaje3").text("¡Lo sentimos! Ingresa solo letras").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje3").fadeOut(); 
		return false;
	}



	
	if(pcolonia == null || pcolonia.length == 0 || /^[a-z][a-z]*/.test(pcolonia)==false){
 $("#mensaje5").text("¡Lo sentimos! Ingresa solo letras").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje5").fadeOut(); 
		return false;
	}

	if(pmuni == null || pmuni.length == 0 || /^[a-z][a-z]*/.test(pmuni)==false){
 $("#mensaje6").text("¡Lo sentimos! Ingresa solo letras").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje6").fadeOut(); 
		return false;
	}

	if(ppostcode==null||ppostcode.length==0||!/^([0-9])*$/.test(ppostcode)){
 $("#mensaje7").text("¡Lo sentimos! Ingresa solo numeros").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje7").fadeOut(); 
		return false;
	}

	if(pphone==null||pphone.length==0||!/^([0-9])*$/.test(pphone)){
 $("#mensaje1").text("¡Lo sentimos! Ingresa solo numeros").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje1").fadeOut(); 
		return false;
	}
	

	if(cchecked==false){
  alert('Debe aceptar los términos y condiciones');
  return false;
}


if(pemail==null||pemail.length==0){

$("#mensaje8").text("El campo 'Email' no puede quedar vacío").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje8").fadeOut(); 
return false;
}

if(puser==null||puser.length==0){

$("#mensaje9").text("El campo 'Usuario' no puede quedar vacío").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje9").fadeOut(); 
return false;
}

if(ppass==null||ppass.length==0){

$("#mensaje10").text("El campo 'Contraseña' no puede quedar vacío").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje10").fadeOut(); 
return false;
}

if(ppass2==null||ppass2.length==0){

$("#mensaje11").text("El campo 'Repetir contraseña' no puede quedar vacío").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje11").fadeOut(); 
return false;
}

if(ppass!=ppass2){

	$("#mensaje10").text("Las contraseñas deben coincidir").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje10").fadeOut(); 

   $("#mensaje11").text("Las contraseñas deben coincidir").fadeIn().css("background", "red").css("color","#FFF");
   $("#mensaje11").fadeOut(); 
return false;
}

}