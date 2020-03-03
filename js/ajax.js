// JavaScript Document

   var i=0;
    function valuser() { var usr=document.getElementById('user').value;
		
		if (usr.length == 0) { 
         
		  document.getElementById('usuario').innerHTML= 'no ha digitado dato';
         return;
     } else {
		 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              
			  var resp= String(xmlhttp.responseText);
			console.log(resp);
			if (resp<=0){
	  console.log(i++);
	  if(i<3){
	  
				 document.getElementById('usuario').innerHTML= 'Usuario Incorrecto';
	  }
	  else{
		  document.getElementById('form1').className='hidden';
		  document.getElementById('error').className='text-danger';
		   document.getElementById('error').innerHTML= 'intentos terminados';
		  }
				}
				else{
					 document.getElementById('usr').innerHTML=resp;
					  document.getElementById('usu').value=resp;
					document.getElementById('form1').className='hidden';
					document.getElementById('form2').className='show';
					}
           }
         }
	 }
         xmlhttp.open("GET", "php/acceso.php?usr="+usr, true);
         xmlhttp.send();
     
}
  
       
    



     function valpass()
{
	
	pass=document.getElementById('pass').value;
		
		if (pass.length == 0) { 
         
		 document.getElementById('pas').innerHTML= 'no ha digitado dato';
         return;
     } else {
		 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              
			  var resp= String(xmlhttp.responseText);
			  
			if (resp==3){
	
	  console.log(i++);
	  if(i<3){
	  
				 document.getElementById('pas').innerHTML= 'Contraseña Incorrecta';
	  }
	  else{
		  document.getElementById('form2').className='hidden';
		  document.getElementById('error').className='text-danger';
		   document.getElementById('error').innerHTML= 'intentos terminados';
		  }
				 
				}
				else{
					 document.getElementById('pas').innerHTML='<span class="fa fa-spin fa-spinner"></span>';
					
					setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
					}
           }
         }
	 }
	 var user=document.getElementById('user').value;
         xmlhttp.open("GET", "php/acceso.php?usr="+user+"&pass="+pass, true);
         xmlhttp.send();
     
}  

function redireccionar(){
  document.getElementById("form2").submit();
} 

function forgot()
{ 

	 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
			
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				
				 document.getElementById('alert').innerHTML=' <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+String(xmlhttp.responseText);
				
				document.getElementById('alert').className='alert alert-info alert-dismissable fade in out show';
				}
			
			
			
			
			}
	
	var user=document.getElementById('user').value;
	console.log(user);
         xmlhttp.open("GET", "php/acceso.php?forgot="+user, true);
         xmlhttp.send();
	
	
	}


