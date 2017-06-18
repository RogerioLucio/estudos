<?php
/**
 * Template Name: Admin
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

	include "wp-content/themes/illdy/common_header.php";

?>
<link href="/TCC/public/wp-content/themes/funcoes/assets/css/style_home.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="">
<div class="container">
  <div id="content">
     <div class="row">
      <div class="col-md-6 col-md-offset-3 ">
        <div class="panel panel-login">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="../wp-content/themes/illdy/page-templates/Acessar.php" method="post" role="form" style="display: block;">
                  <div name="mensagem" style="display:none" class="alert alert-danger"></div>
           
                  <h2>LOGIN</h2>  
                    <div class="form-group">
                      <input type="text" name="cnpj" id="cnpj" tabindex="1" value="" class="form-control" placeholder="CNPJ" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" value=""  tabindex="2" class="form-control" placeholder="Senha">
                     
                    </div>
                    <div class="col-xs-6 form-group pull-left checkbox">
                      <input id="checkbox1" type="checkbox" name="remember">
                      <label for="checkbox1">Lembrar</label>   
                    </div>
                    <div class="col-xs-6 form-group pull-right">     
                          <input type="submit" name="entrar-submit" tabindex="4" class="form-control btn btn-login" value="Entrar">
                    </div>
                </form>
                <form id="register-form" action="#" method="post" role="form" style="display: none;">
                  <h2>REGISTER</h2>
                    <div class="form-group">
                      <input type="text" name="usuario" id="usuario" tabindex="1" class="form-control" placeholder="Username" value="">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                        </div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6 tabs">
                <a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
              </div>
              <div class="col-xs-6 tabs">
                <a href="#" id="register-form-link"><div class="register">REGISTER</div></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
    <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center">
            <h6 style="font-size:14px;font-weight:100;color: #fff;">Desenvolvido por <a href="../sobre-nos" style="color: #fff;" target="_blank">GRUPO</a></h6>
        </div>   
    </div>
</footer>
<script type="text/javascript">
  $(function() {

  var base_url = window.location.href;
  $('#login-form-link').click(function(e){
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

  $('[name=cnpj]').mask('00.000.000/0000-00', {reverse: true});
  $("[name=entrar-submit]").on("click",function(){
    event.preventDefault();
    $("[name=mensagem]").hide();
      if($("[name=cnpj").val().trim() == ''){
        $("[name=mensagem]").show();
        $("[name=mensagem]").html("Digite um CNPJ");
        return;
      }else if($("[name=cnpj").val().length < 18){
        $("[name=mensagem]").show();
        $("[name=mensagem]").html("CNPJ inválido");
        return;

      }else if($("[name=password").val().trim() == ''){
        $("[name=mensagem]").show();
        $("[name=mensagem]").html("Digite sua  senha");
      }else if($("[name=password").val().length < 6){
        $("[name=mensagem]").show();
         $("[name=mensagem]").html("Senha com menos de 6 digitos");
      }else{
        $("[name=mensagem]").hide();
          $("#login-form").submit();
      } 
  });

});



</script>