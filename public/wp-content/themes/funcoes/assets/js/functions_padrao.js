// Script de login do usuário 

/*
* @author: Rogério Lúcio da Silva, Cristiane e Julio Cezar
* @function: Realiza uma busca no banco de dados verificando se o usuário existe;
*
*
*/

$(document).ready(function(){
var base_url = window.location.href;
	/*
	$("[name=entrar-submit]").on("click",function(){
		var objs ={cpf:$("#cpf").val(),senha:$("#password").val()};
	
		if(!validation_form(objs){
			console.log(this);
		}

	    $.ajax({
		    url: base_url+"Login" ,
		    type:'post',
		    data:$("#login-form").serialize(),
		    success: function(data){
		    	//console.log(data);
		    }
	    });

	});*/
})

function validation_form(campos=""){
	
		console.log(campos);
	}




//JavaScript Home_Page
$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    
    