
<?php
$this->load->library('form_validation');
?>

<link href="<?php echo base_url ( 'assets/css/style_home.css' );?>"  rel="stylesheet">
<link rel="stylesheet" type="text/css" href="">
<div class="container">
  <div id="content">
     <div class="row">
      <div class="col-md-6 col-md-offset-3 ">
        <div class="panel panel-login">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
               <?php echo form_error('geral'); ?>
                <form id="login-form" action="Acessar" method="post" role="form" style="display: block;">
          
                  <?php echo form_open('form'); ?>
                  <h2>LOGIN</h2>
                    <div class="form-group">
                      <input type="text" name="cpf" id="cpf" tabindex="1" value="<?php echo set_value('cpf'); ?>" class="form-control" placeholder="CPF" value="">

                      <?php echo form_error('cpf'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>"  tabindex="2" class="form-control" placeholder="Senha">
                      <?php echo form_error('password'); ?>
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
            <h6 style="font-size:14px;font-weight:100;color: #fff;">Desenvolvido por  by <a href="http://hashif.com" style="color: #fff;" target="_blank">TESE</a></h6>
        </div>   
    </div>
</footer>
<script type="text/javascript">
  $(function() {
    var base_url = window.location.href;
    $('#login-form-link').click(function(e) {
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
  $('[name=cpf]').mask('000.000.000-00', {reverse: true});



});



</script>