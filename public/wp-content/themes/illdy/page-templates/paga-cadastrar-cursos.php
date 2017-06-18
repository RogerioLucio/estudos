
<?php
/**
 * Template Name: page-cadastrar-Cursos
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
include "wp-content/themes/illdy/common_header.php";
include "wp-content/themes/illdy/nav/nav_admin.php";
?>

	  <!--PÁGINA ID 5 TABELA page_Key NO BD-->
<div class="container">
	<div class="pagina" style="border-radius: 10px; padding-top: 20px;">  
	        <div class="div_cadastro" style="    padding: 20px;">
	          <form  data-toggle="validator" id="cadastro_curso" action='' method="POST">
	       
	            <div class="row"> 
	              <div class="col-md-12"> 
	                <div class="text-left"> 
	                  <h2><label class="label-cadastro">Cadastro de Cursos</label></h2>
	                  <hr>
	                </div>
	              </div>
	            </div>	  
				
	            <div class="row">
		            <div class="col-md-6">
		              	<label for="Curso" class="label-cadastro">Nome do Curso <span class="campo_obg"> * </span></label><br>
		              	<input class="form-control" type="text" name="Curso" required>
		            </div> 
		            <div class="col-md-6">
		              		<label for="Empresa" class="label-cadastro">Empresa <span class="campo_obg"> * </span></label><br>
		              		<input class="form-control" type="text" name="empresa" required>
		            	</div>
		         </div>

		         <div class="row">
		            	<div class="col-md-4">
		              		<label for="cargaHoraria" class="label-cadastro">Carga Horária <span class="campo_obg"> * </span></label><br>
		              		<input class="form-control" type="text" name="cargaHoraria" required>
		            	</div> 
		            	<div class="col-md-2">
		              		<label for="qtdVagasCurso" class="label-cadastro">Quantidade de Vagas <span class="campo_obg"> * </span></label><br>
		              		<input " class="form-control" type="text" name="qtdVagasCurso" required>
		            	</div>
		            	<div class="col-md-4">
		              		<label for="cidade" class="label-cadastro">Cidade<span class="campo_obg"> * </span></label><br>
		              		<input class="form-control" type="text" name="cidade" required>
		            	</div>
		            	<div class="col-md-2">
              				<label for="estado" class="label-cadastro">Estado <span class="campo_obg"> * </span></label><br>
          
              				<select class="form-control" id="estado" name="estado">
              				</select>
            			</div>  
		          	</div>

		          	<div class="row">
            			<div class="col-md-8">
              				<label for="email" class="label-cadastro">Email <span class="campo_obg"> * </span></label><br>
              				<input class="form-control"  type="email" name="email" data-error="Por favor, informe um e-mail correto." required>
            			</div>
            			<div class="col-md-4">
              				<label for="senha" class="label-cadastro">Telefone <span class="campo_obg"> * </span></label><br>
              				<input class="form-control" type="text" name="telefone" required>
            			</div>
		          	</div>

		          	<div class="row">
			            <div class="col-md-8">
			              	<label for="preRequisito" class="label-cadastro">Pré-Requisito <span class="campo_obg"> * </span></label><br>
			              	<input class="form-control" type="text" name="preRequisito" required>
			            </div> 
			            <div class="col-md-4">
			              	<label for="escolaridadeMin" class="label-cadastro">Escolaridade Mínima <span class="campo_obg"> * </span></label><br>
			              	<input class="form-control" type="text" name="escolaridadeMin" required>
			            </div>
		        	</div>

		        	<div class="row">
		            	<div class="form-group col-md-12">
		              		<label for="descricaoCurso" class="label-cadastro">Descrição do Curso<span class="campo_obg"> * </span></label><br>
		              		<textarea class="form-control" id="descricaoCurso" name="descricaoCurso" required></textarea>
		            	</div> 
		          	</div>

		          	</br>
            		</br>

		            <div class="row">
		               <div class="col-md-10 text-right">
		                  <input type="submit" id="cadastrar" class="btn btn-primary" value="Cadastrar" >
		               </div>
		               <div class="col-md-2 text-right">
		                  <input type="submit" id="Cancelar" class="btn btn-primary" value="Cancelar" >
		               </div>
		            </div>
		            </form>
			</div>
	</div>
</div>

<script type="text/javascript">
	jQuery("form").submit("click",function(){
		event.preventDefault();
		$.ajax({
		 	url: '<?= get_site_url(); ?>/wp-content/themes/illdy/ajax/cursos.php' ,
		 	data:  "action=cadastrar&" + $("#cadastro_curso").serialize(),
		 	type:'POST',
		 	success: function(data){
		 		if(data == 1){
		 			BootstrapDialog.show({
		 				type: BootstrapDialog.TYPE_SUCCESS,
			            title: 'Cadastro Realizado',
			            message: 'Seu curso foi cadastrado!'
		        	});
		        	$('#cadastro_curso').trigger("reset");
		 		}else{
		 			BootstrapDialog.show({
		 				type: BootstrapDialog.TYPE_DANGER,
			            title: 'Erro',
			            message: 'Cadastro não realizado, verifique os campos ou entre em contato com o suporte!'
		        	});
		 		}
		 	}
		});
	});

	
</script>