<?php
/**
 * Template Name: Pagina vagas cadastradas
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
include "wp-content/themes/illdy/common_header.php";
include "wp-content/themes/illdy/nav/nav_admin.php";
include "wp-content/themes/illdy/ajax/cursos.php";
global $wpdb;
	$resultado = carrega_grid('vagas' , $filtros);
?>
<div class="container">
	<div class="pagina" style="border-radius: 10px; padding-top: 20px;">  
	    <div class="div_cadastro" style="    padding: 20px;">  
		    <div class="row"> 
		       <div class="col-md-12">
		        	<h2 class="sub-header">Vagas </h2>
		        	<hr>
		        </div>
      		</div>
	        <div class="row">
		        <div class="col-md-12">
		        	<div class="text-right">	
		        	<label>	Filtros</label>
		        		<a  data-toggle='modal' data-target='#filtros' ><i class="fa fa-filter fa-2x" aria-hidden="true"></i></a>
		        	</div>
		        </div
	     	</div>
	     	<div class="row">	
	      		<div class="container-fluid">
		            <table class="table table-striped">
		              <thead>
		                <tr>
		                  <th align="center" width="20%;">Título da Vaga</th>
		                  <th align="center" width="20%;">Empresa</th>
		                  <th align="center" width="10%;">Carga Horaria</th>
		                  <th align="center" width="10%;">Vagas</th>
		                  <th align="center" width="20%;">Cidade</th>
		                  <th align="center" width="5%;">Visualizar</th>
		                </tr>
		              </thead>
		              <?php 
		                  echo "<tbody id='table_page'>";
		                  $count = 0;
		                foreach ($resultado as $vagass) {
		                 echo "<tr>";
		                  echo "<td style='padding-right:10px'>" . $vagass->nm_vagas . "</td>";
		                  echo "<td>" . $vagass->nm_empresa . "</td>";
		                  echo "<td>" . $vagass->qt_carga_horaria . "</td>";
		                  echo "<td>" . $vagass->qt_vagas . "</td>";
		                  echo "<td>" . $vagass->nm_cidade . "</td>";
		                  echo "<td align='center'> <span name='opc' id='visualizar'  data-target='#gridSystemModal'  data-categoria='$vagass->id_vagas' id=". $vagass->id_vagas  . " ><i class='fa fa-cog' aria-hidden='true'></i></span></td>";
		                  echo "<tr>";
		                  $count++;
		                }
		                echo "</tbody>";
		               ?> 
		            </table>
	         	 </div>
         	 </div>
        </div>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="gridSystemModal"  aria-labelledby="gridSystemModal">
  <div class="modal-dialog modal-lg" role="dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="gridSystemModalLabel">Atualizar vagas</h2>
      </div>
      <form role="form" data-toggle="validator">
      <div  class="modal-body atualiza">	
		  <h1>vagas</h1>
		  <p>Edite informações sobre seu vagas:</p>  
		  <hr>          
		  <div class="row">
		  		<div class="col-md-4">
		  			 <span>vagas</span>
		  			<input id="nm_vagas" class="form-control"required>
		  		</div>
		  		<div class="col-md-4">
		  			 <span>Empresa</span>
		  			 <input id="nm_empresa" class="form-control"required>
		  			
		  		</div>
		  		<div class="col-md-2">
		  			 <span>Nº Vagas</span>
		  			<input id="qt_vagas" class="form-control"required>
		  		</div>
		  		<div class="col-md-2">
		  			 <span>Nº Horas</span>
		  			<input id="qt_carga_horaria" class="form-control"required>
		  		</div>
		  </div>
		  <br>
		  <div class="row">
		  		<div class="col-md-4">
		  			 <span>Cidade</span>
		  			<input id="nm_cidade" class="form-control"required>
		  		</div>
		  		<div class="col-md-1">
		  			 <span>UF</span>
		  			 <input maxlength="2" id="sg_uf" class="form-control"required>
		  			
		  		</div>
		  		<div class="col-md-4">
		  			 <span>E-mail</span>
		  			<input id="nm_email" type="email" class="form-control" required>
		  		</div>
		  		<div class="col-md-3">
		  			 <span>Telefone</span>
		  			<input id="nr_telefone" class="form-control"required>
		  		</div>
		  </div>
		  <br>
		  <div class="row">
		  		<div class="col-md-6">
		  			 <span>Requisito Minímo</span>
		  			<input id="nm_requisito" class="form-control"required>
		  		</div>
		  		<div class="col-md-6">
		  			 <span>Escolaridade Miníma</span>
		  			 <input id="nm_escolaridade" class="form-control"required>
		  			
		  		</div>
		  </div>
		  <br>
		  <div class="row">
			  <div class="col-md-12">
			  <span >Descrição do vagas</span>
			  	<textarea id="ds_vagas" rows="4" class="form-control"></textarea>
			  </div>
		  </div>
      </div><!-- Modal Body -->
      <div class="modal-footer">
        <button type="button" id="editar" class="btn btn-info">Habilitar Edição</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="salvar" name='salvar' class="btn btn-primary">Salvar Alterações</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


	<!-- Modal -->
<div class="modal fade" id="filtros"  aria-labelledby="filtros">
  <div class="modal-dialog modal-lg" role="dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="gridSystemModalLabel">Filtrar vagas</h2>
      </div>
      <div class="modal-body">	
		<div class="row">	
			<div class="col-md-6">	
					<label>Buscar por vagas</label>
					<input type="text" id="js_vagas" class="form-control" placeholder="Digite o nome do vagas" name="">
			</div>
			<div class="col-md-6">	
					<label>Buscar por Empresa</label>
					<input type="text" id="js_empresa" class="form-control" placeholder="Digite o nome da Empresa" name="">
			</div>
		</div><br>

		<div class="row">	
			<div class="col-md-4">	
					<label>Carga Horária</label>
					<input type="text" id="js_hora" class="form-control" placeholder="Digite a Carga Horaria" name="">
			</div>
			<div class="col-md-6">	
					<label>Cidade</label>
					<input type="text" id="js_cidade" class="form-control" placeholder="Digite o nome da Cidade" name="">
			</div>
			<div class="col-md-2">	
						<label>UF</label>
						<input type="text" id="js_estado" class="form-control" placeholder="UF" name="">
			</div>
		</div><br>
		<div class="row">
			
		</div>

	 </div><!-- Modal Body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <input  type="button" id="filtro_pesquisar" value="Filtrar" class="btn btn-primary">
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->	

<script type="text/javascript">
	$("#filtro_pesquisar").on("click",function(){
		var data = {'action': 'filtrar',
					'vagas': $("#js_vagas").val(),
					'empresa': $("#js_empresa").val(),
					'cidade': $("#js_cidade").val(),
					'estado': $("#js_estado").val(),
					'hora': $("#js_hora").val()};
		$.ajax({
			url:'<?php echo get_template_directory_uri() ?>/ajax/vagass.php',
			data: data,
			type:'POST',
			beforeSend: function() {
       			//$(placeholder).addClass('loading');
    		},
			success: function(data){
			var response = JSON.parse(data);
			var j = 0;
			$("#table_page").html("");
				$(response).each(function(){
					$("#table_page").append(
						"<tr>"+
						"<td>" + response[j]['nm_vagas'] + "</td>" +
						"<td>" + response[j]['nm_empresa'] + "</td>" +
						"<td>" + response[j]['qt_carga_horaria'] + "</td>" +
						"<td>" + response[j]['qt_vagas'] + "</td>" +
						"<td>" + response[j]['nm_cidade'] + "</td>" +
						"<td align='center'> <span name='opc'   data-categoria=" + response[j]['id_vagas'] +" id="+ response[j]['id_vagas']  + " ><i class='fa fa-cog' aria-hidden='true'></i></span></td>" + 
						"<tr>");
					j++;
				});
				$('#filtros').modal('hide');
			$("#js_vagas").val("");
			$("#js_empresa").val("");
			$("#js_cidade").val("");
			$("#js_estado").val("");
			$("#js_hora").val("");
			}
		})
	});
		$("#editar").on("click", function(){
			$(".modal-body input, textarea").prop("disabled",false);
			$("#salvar").prop("disabled",false);
		});
		jQuery("form").submit("click",function(){
			event.preventDefault();
			var object = {};
			var object_erro = {};
			var erro = 0;
			var Campo_erro = 0;
			$(".atualiza input, textarea").each(function(index, val){
				object[val.id] = $(".modal-body input, textarea").eq(index).val();
			})
			object['action'] ='editar';
			object['id_vagas'] = $('#salvar').data("id");
			$.ajax({
				url:'<?php echo get_template_directory_uri() ?>/ajax/vagass.php',
				data: object ,
				type: 'POST',
				beforeSend: function(){
					$('#gridSystemModal').modal('toggle');
				},
				success: function(data){
					if(data == 1){
			 			BootstrapDialog.show({
			 				type: BootstrapDialog.TYPE_SUCCESS,
				            title: 'Sucesso!',
				            message: 'Seu vagas foi Atualizado!'
			        	});
			        	$('#cadastro_vagas').trigger("reset");
			 		}else{
			 			BootstrapDialog.show({
			 				type: BootstrapDialog.TYPE_DANGER,
				            title: 'Erro',
				            message: 'vagas não Atualizado, verifique os campos ou entre em contato com o suporte!'
			        	});
			 		}
			 	$("#filtro_pesquisar").trigger('click');
			 	$('#filtros').modal('hide');
				}
			});
		});	
		$(document).on('click', '[name=opc]', function(){
			$('#gridSystemModal input,textarea').val('');
			$('#gridSystemModal input,textarea').prop("disabled", true);
			$('#gridSystemModal').modal('toggle');
			$.ajax({
				url:'<?php echo get_template_directory_uri() ?>/ajax/vagass.php',
				data: 'action=visualizar&id_vagas='+$(this).data("categoria"),
				type:'POST' ,
				success: function(data){
						var response = JSON.parse(data);
						$("#nm_vagas").val(response[0]['nm_vagas']).prop( "disabled", true);
						$("#nm_empresa").val(response[0]['nm_empresa']).prop( "disabled", true);
						$("#qt_vagas").val(response[0]['qt_vagas']).prop( "disabled", true);
						$("#qt_carga_horaria").val(response[0]['qt_carga_horaria']).prop( "disabled", true);
						$("#nm_cidade").val(response[0]['nm_cidade']).prop( "disabled", true);
						$("#sg_uf").val(response[0]['sg_uf']).prop( "disabled", true);
						$("#nm_email").val(response[0]['nm_email']).prop( "disabled", true);
						$("#nr_telefone").val(response[0]['nr_telefone']).prop( "disabled", true);
						$("#nm_requisito").val(response[0]['nm_requisito']).prop( "disabled", true);
						$("#nm_escolaridade").val(response[0]['nm_escolaridade']).prop( "disabled", true);
						$("#ds_vagas").val(response[0]['ds_vagas']).prop( "disabled", true);
						$('#salvar').attr("data-id",response[0]['id_vagas']).prop( "disabled", true);
				}
			});
		});


$("#nr_telefone").mask("(00)0000-0000");
</script>
