$(document).ready(function() { 
	var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;	
	$(".boton").click(function(){  
		$(".error").fadeOut().remove();
		
        if ($(".nombre").val() == "") {  
			$(".nombre").focus().after('<span class="error">Ingresa tu Nick</span>');  
			return false;  
		}  
        }else if ($(".email").val() == "" || !emailreg.test($(".email").val())) {
			$(".email").focus().after('<span class="error">Ingresa un email valido</span>');  
			return false;  
		}  
        if ($(".asunto").val() == "") {  
			$(".asunto").focus().after('<span class="error">Ingresa el motivo del mensaje</span>');  
			return false;  
		}  
        if ($(".mensaje").val() == "") {  
			$(".mensaje").focus().after('<span class="error">Ingresa tu mensaje</span>');   
			return false;  
		}  
    });  
	$(".nombre, .asunto, .mensaje").keyup(function(){ 
        if ($(this).val() != "") {  			
			$('.error').fadeOut();
			return false;  
		}  
	});	
	$(".email").keyup(function(){ 
        if ($(".email").val() != "" && emailreg.test($(".email").val())) {	
			$('.error').fadeOut();  
			return false;  
		}  
	});
});