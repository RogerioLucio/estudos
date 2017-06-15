  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>

  <body style="">
    <div class="pagina" style="border-radius: 10px; padding-top: 20px;  padding: 20px;">   
      <div class="row"> 
       <div class="col-md-12">
        <h2 class="sub-header">Empresas Cadastradas</h2>
      </div>
      </div>
      <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th width="20%;">Razão Social</th>
                  <th width="20%;">CNPJ</th>
                  <th width="20%;">Telefone</th>
                  <th width="20%;">Endereço</th>
                  <th width="5%;">Visualizar</th>
                </tr>
              </thead>
              <?php 
                /*
                  echo "<tbody>";
                  $count = 0;
                foreach ($resultado as $patrimonio) {
                  if($count % 2 == 1){
                     echo "<tr>";
                  }else{
                     echo "<tr style='background-color:white;'>";
                  }
                  if($patrimonio->status_equipamento == 1){
                        $status = "Disponível";
                  }else if($patrimonio->status_equipamento == 2){
                        $status = "Reservado";
                  }else if($patrimonio->status_equipamento == 3){
                        $status = "Descartado";
                  }
                          
                  echo "<td style='padding-right:10px'>" . $patrimonio->patrimonio_equipamento . "</td>";
                  echo "<td>" . $patrimonio->nome_equipamento . "</td>";
                  echo "<td>" . $patrimonio->descricao_categoria . "</td>";
                  echo "<td>" . $status . "</td>";
                  echo "<td> <span name='opc'  data-categoria='$patrimonio->id_categoria' id=". $patrimonio->id_equipamento  . " ><i class='fa fa-cog' aria-hidden='true'></i></span></td>";
                  echo "<tr>";
                  $count++;
                }
                echo "</tbody>";
                */
               ?> 
            </table>
          </div>
        </div>
      </div>














    </div>
  </body>
  </html>

  <script type="text/javascript">
    $("#cadastrar").on("click",function(){

      /*
       $.ajax({




       }); */


    });



  </script>