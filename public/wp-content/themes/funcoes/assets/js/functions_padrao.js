

// Script de login do usuário 

/*
* @author: Rogério Lúcio da Silva, Cristiane e Julio Cezar
* @function: Realiza uma busca no banco de dados verificando se o usuário existe;
*
*
*/


$(document).ready(function(){
var base_url = window.location.href;



$(document).ready(function(){
    $("[name=cnpj]").mask("999.999.999-99");
    $('[name=data]').mask('00/00/0000');
    $('[name=cep]').mask('00000-000');
    $('[name=telefone]').mask('(00)0000-0000');
    $("#nr_telefone").mask("(00)0000-0000");
    $.ajax({
    url:'../wp-content/themes/illdy/functions_padrao.php',
    type:'POST',
    data: 'action=uf',
    success: function(data){
            var estados = JSON.parse(data);
            var j = 0; 
            $("[name=estado]").html("");
            $(estados).each(function(){
              $("[name=estado]").append("<option value='" + estados[j].uf + "'>"+ estados[j].uf +"</option>");
              j++;
            })
        }});
});


})

//JavaScript Home_Page
$(function(){
    //$('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    

    

