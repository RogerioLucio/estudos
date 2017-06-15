  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>

  <body style="">


    <div class="pagina" style="border-radius: 10px; padding-top: 20px;">          
        <div class="div_cadastro" style="    padding: 20px;">
          <form  data-toggle="validator" id="cadastro_empresa" action='teste' method="POST">
            <div class="row"> 
              <div class="col-md-12"> 
                <div class="text-left"> 
                  <h2><label class="label-cadastro">Cadastro de Empresas</label></h2>
                  <hr>
                </div>
              </div>
            </div>
          <div class="row">
          
            <div class="col-md-6">
              <label for="usuario" class="label-cadastro">Nome Fantasia <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="text" name="nome"  data-error="Por favor, informe um e-mail correto." required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-6">
              <label for="usuario" class="label-cadastro">Razão Social <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="text" name="nome" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label for="senha" class="label-cadastro">CNPJ <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="text" name="cnpj" required>
            </div>
            <div class="col-md-6">
              <label for="senha" class="label-cadastro">Email <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="email" name="email" required>
            </div>
          </div>
         
          <div class="row">
            <div class="col-md-3">
              <label for="senha" class="label-cadastro">Telefone <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="text" name="telefone" required>
            </div>
            <div class="col-md-3">
              <label for="senha" class="label-cadastro">Celular <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="text" name="celular" required>
            </div>
          </div>
           <div class="row">
            <div class="col-md-2">
              <label for="senha" class="label-cadastro">CEP <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="text" name="cep" required>
            </div>
            <div class="col-md-4">
              <label for="senha" class="label-cadastro">Endereço <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="text" name="endereco" required>
            </div>
            <div class="col-md-2">
              <label for="senha" class="label-cadastro">Nº <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="text" name="numero" required>
            </div>
            <div class="col-md-4">
              <label for="senha" class="label-cadastro">Bairro <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="text" name="bairro" required>
            </div>
          </div>
           <div class="row">
            <div class="col-md-4">
              <label for="senha" class="label-cadastro">Cidade <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="cidade" name="cidade" required>
            </div>
            <div class="col-md-2">
              <label for="senha" class="label-cadastro">Estado <span class="campo_obg"> * </span></label><br>
          
              <select class="form-control" name="estado"></select>
            </div>
          </div>
            <div class="row">
            <div class="col-md-4">
              <label for="senha" class="label-cadastro">Usuario <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="email" name="email" required>
            </div>
            <div class="col-md-4">
              <label for="senha" class="label-cadastro">Senha <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="text" name="login" required>
            </div>
            <div class="col-md-4">
              <label for="senha" class="label-cadastro">Confirmar Senha <span class="campo_obg"> * </span></label><br>
              <input class="form-control" type="text" name="login" required>
            </div>
          </div>
          <div class="row">


          <div class="col-md-4">
              <label  class="label-cadastro">Setor</label><br>
                 <select name="setor" class="form-control ">
                      <?php foreach ($setor as $item): ?>
                          <option value='<?=$item->id_setor?>'>
                          <?= $item->nome_setor?>
                          </option> 
                      <?php endforeach;?>
                   </select>
                   <br/>
            </div>

          <div class="col-md-2">
            <label for="novoSetor">Novo Setor</label>
            </br>
            <button name="novoSetor" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSetor"><i class="fa fa-fw fa-plus"></i></button>
          </div>

          </div>



          <div class="row">
             <div class="col-md-12 text-right">
                <input type="submit" id="cadastrar" class="btn btn-primary" value="Cadastrar" >
             </div>
          </div>
          
          </form>
        </div>

        
  <div class="container">


    <!-- Modal -->
    <div class="modal fade" id="modalSetor" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Novo Setor</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        <form action='<?php echo base_url('setor/cadastro');?>' method="POST">
          <div class="modal-body">
              <label for="novoSetor">Nome</label>
        <input type="text" name="novoSetor" class="form-control" value="<?php if(isset($novoSetor))echo $novoSetor?>">       
      </div>
          <div class="modal-footer">
            <div class="col-md-12">
          <input type="submit" class="btn btn-primary pull-right" value="Cadastrar" name="cadastrar">
          <input type="hidden" name="base_url" value="<?php echo base_url()?>" />
        </div>
          </div>
          </form>
        </div>
    </div>
  </div>


  <!-- MODAL novo Cargo -->

  <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="modalCargo" role="dialog">
      <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Novo Cargo</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        <form action='<?php echo base_url('cargo/cadastro');?>' method="POST">
          <div class="modal-body">
              <label for="novoCargo">Nome</label>
        <input type="text" name="novoCargo" class="form-control" value="<?php if(isset($novoCargo))echo $novoCargo?>">       
      </div>
          <div class="modal-footer">
            <div class="col-md-12">
          <input type="submit" class="btn btn-primary pull-right" value="Cadastrar" name="cadastrar">
          <input type="hidden" name="base_url" value="<?php echo base_url()?>" />
        </div>
          </div>
          </form>
        </div>
          
    </div>
    
  </div>
  </div>


  </body>
  </html>

  <script type="text/javascript">
    $("#cadastrar").on("click",function(){
       $.ajax({
          url: "<?php echo base_url('Geral_Controller/CarregaSelectEspacos')?>",
         data: $("#cadastro_empresa").serialize(),
         type:'POST',
         success: function(data){

         }
       });
    });

    /*
    *Alimenta demais campos após o preenchimento do CEP
    *
    */
    $("[name=cep]").on("blur",function(){
      $.ajax({
        url:'http://viacep.com.br/ws/' +$("[name=cep]").val() + '/json/ ',
        type:'GET',
        success: function(data){
          console.log(data.localidade);
          $("[name=bairro]").val(data.bairro);
          $("[name=cidade]").val(data.localidade);
          $("[name=endereco]").val(data.logradouro);
          $("[name=estado]").val(data.uf);
          //$("#").val(data.uf)
         // $("#").val()
        }



      });
    })



  </script>