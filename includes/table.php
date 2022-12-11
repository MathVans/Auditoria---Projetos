<?php  

  $resultados ="";
        foreach ($projetos as $row) {
            if($row->situacao!=null || $row->situacao != ""){
                $a = $row->situacao;   
            }else{
                $a = "Sem atualização";
            }
            $resultados .='<tr data-toggle="modal" data-target="#exampleModal"><td>'.$row->projeto.'</td>
                  <td>'.$row->area.'</td>
                  <td>'.$row->operacao.'</td>
                  <td>'.$row->plataforma.'</td>
                  <td>'.$row->clienteUn.'</td>
                  <td>'.$row->local.'</td>
                  <td>'.$a.'</td>
                  <td style="display:none">'.$row->ID.'</td>
                  </tr>';
              
                 // 
        }
    
?>
<style type="text/css">
             
            .table-responsive {
            border-spacing: 1px; 
            border-collapse: collapse; 
            background:white;
            border-radius:6px;
            overflow-x:hidden;
            min-height:600px; 
            max-width:1368px; 
            max-height:600px; 
            width:100%;
            margin:0 auto;
            position:relative;  
                }

            *{ position:relative }

            .table-sticky th {
            background: #fff;
            position: sticky;
            top: -1px;
            z-index: 990;
            
            } 
            #Tabela_Projetos th{
            position: sticky;           
            }
            #Tabela_Projetos thead tr { 
                height:80px;
                font-size:16px;
            }
            #Tabela_Projetos td{
                font-size:14px;
                max-width:200px;
                height:30px;	
                cursor: pointer;
                }

            /* #ProjetosTable tr:hover td{
            background-color: #feffb7;
            } */

            /**C:checked quando selecionado**/
            #Tabela_Projetos tr.selecionado td{
            background-color: #aff7ff;
            }    
                #SidebarIndex{
                    background: white;
                }
    </style>

<table class="table text-start align-middle table-bordered table-hover mb-0 table-sticky" id="Tabela_Projetos">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Projeto</th>
                                    <th scope="col">Operação</th>
                                    <th scope="col">Área</th>
                                    <th scope="col">Plataforma</th>
                                    <th scope="col">Cliente/Unidade</th>     
                                    <th scope="col">Local</th>
                                    <th scope="col">Status</th>
                                    <th style="display:none" scope="col">ID</th> 
                                    <!-- <th scope="col">Actions</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php 


                              echo $resultados;
                                
                                ?>
                            </tbody>
                        </table>



    

    <script type="text/javascript">
           //debugger;

             var tabela = document.getElementById("Tabela_Projetos");
             var linhas = tabela.getElementsByTagName("tr");
             var dados = 0;


            for(var i = 0; i < linhas.length; i++){
	            var linha = linhas[i];
                linha.addEventListener("click", function(){
                dados = "";
  	                //Adicionar ao atual
                        selLinha(this, false);  

                        var selecionados = tabela.getElementsByClassName("selecionado");
                        for(var i = 0; i < selecionados.length; i++){
                                    var selecionado = selecionados[i];
                                    selecionado = selecionado.getElementsByTagName("td");
                                    var id = selecionado[0].innerHTML;
                                                                
                                }


                        var selecionadoth = selecionados[0].getElementsByTagName("th");
                        if(selecionadoth != null){
                            try{
                                if(selecionadoth[0].innerHTML == "Projeto"){                             
                                selecionados[0].classList.remove("selecionado");
                                return;   
                                    }
                                }
                            catch{
                                
                            }      
                        } 
                       //debugger;
                        //Recupere o Id do registro e passe para o seu modal
                        var text = $("#textarea").val();
                        $("#modal_body").html(id);
                        
                        $('#updateModal').modal('show');
	                });

                          
                         
                    function selLinha(linha, multiplos){
                        if(!multiplos){
                            var linhas = linha.parentElement.getElementsByTagName("tr");
                                for(var i = 0; i < linhas.length; i++){
                                var linha_ = linhas[i];
                                linha_.classList.remove("selecionado"); 
                                dados = 0;   
                                }
                        }
                        linha.classList.toggle("selecionado");
                        }
     

    //     $('#updateModal').on('show.bs.modal', function () {                                                       
    //     var button = $(event.relatedTarget); // Button that triggered the modal
    //     var recipientId    = button.data('id');                                                                 
    //     var recipientNome = button.data('nome'); // Extract info from data-* attributes
    //     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    //     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    //     var modal = $(this);
    //     modal.find('#id').val(recipientId); << pega o valor armazenado no recipient e substitui no modal onde o #id = o id do campo no modal para substituir
    //     modal.find('#nome').val(recipientNome);
    // });          



     }
 


     </script>
   