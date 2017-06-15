// Script de login do usuário 

/*
* @author: Rogério Lúcio da Silva, Cristiane e Julio Cezar
* @function: Realiza uma busca no banco de dados verificando se o usuário existe;
*
*
*/



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

$(document).ready(function(){
    $("[name=cnpj]").mask("999.999.999-99");
    $('[name=data]').mask('00/00/0000');
    $('[name=cep]').mask('00000-000');
    $('[name=telefone]').mask('(00)0000-0000');



    $.ajax({
    url:window.location.origin + "/TCC/administrador/Common_Controller/getUf",
    type:'POST',
    success: function(data2){
            var estados = JSON.parse(data2);
            var j = 0; 
            $("[name=estado]").html("");
            $(estados).each(function(){
              $("[name=estado]").append("<option value='" + estados[j].uf + "'>"+ estados[j].uf +"</option>");
              j++;
            })
        }});

});


    