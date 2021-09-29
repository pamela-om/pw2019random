function controlarSenha(){
	
	if ($('#novaSenha').is(':checked')) {
		$('#senha').prop('readonly', false);		
	}else{
		$('#senha').prop('readonly', true);		
	}
  
}

$("#formUsuario").validate({
       rules:{
           login:{
               required:true,
			   minlength: 3,
			   remote: {
				  url: "UsuarioVerificar.php?id="+$("#id").val(),
				  type: "post",
				  data: {
				     login: function() {
					     return $( "#login" ).val();
				     }
				  }
			   }					   
           }, 		   
           senha:{
               required:true
           }, 
           email:{
               required:true,
			   email: true			   
           }		   
       }, 
       messages:{
           login:{
               required:"Campo obrigatório",
			   minlength:"Por favor, insira pelo menos {0} caracteres",
			   remote:"Já existe um usuário com esse login"
           },
           senha:{
               required:"Campos obrigatório"
           },
           email:{
               required:"Campos obrigatório",
			   email:"E-mail inválido"
           } 
       }
});


