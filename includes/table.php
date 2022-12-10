<?php
    $query = "select * from projetos ORDER BY projeto ASC";
    $projetos = mysqli_query($conexao, $query);
    $exibe = mysqli_fetch_array($projetos);
?>
<style type="text/css">
    #NavbarIndex{
        
    }

    #PainelForm{

        margin: 0;
                    margin-top: 20px;
                    margin-right: 10px;
                    margin-bottom: 0px;
                    margin-left: 20px;

                    background-color: red;
                }
             
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php 



                                if (mysqli_num_rows($projetos)) {
                                    while ($row = mysqli_fetch_array($projetos)) {
                                        echo "<tr><td>{$row['projeto']}</td>
                                              <td>{$row['area']}</td>
                                              <td>{$row['operacao']}</td>
                                              <td>{$row['plataforma']}</td>
                                              <td>{$row['clienteUn']}</td>
                                              <td>{$row['local']}</td>
                                              <td>{$row['situacao']}</td>
                                              </tr>";
                                    }
                                }
                                
                                ?>
                            </tbody>
                        </table>