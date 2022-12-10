<?php
//require __DIR__.'\vendor\autoload.php';
use \App\Entity\Projeto;

//Validando post
 if(isset($_POST['ProjetoId'], $_POST['AreaId'], $_POST['OperacaoSelect'], $_POST['TituloProjeto'], $_POST['PlataformaSelect'], 
 $_POST['ClienteSelect'], $_POST['LocalSelect'], $_POST['StatusSelect'] )){

    $obProj = new Projeto;
    $obProj->
                print_r($_POST['ProjetoId']."\N      ");
                print_r($_POST['AreaId']."\N      ");
                print_r($_POST['OperacaoSelect']."\N      ");
                print_r($_POST['TituloProjeto']."\N      ");
                print_r($_POST['PlataformaSelect']."\N      ");
                print_r($_POST['ClienteSelect']."\N      ");
                print_r($_POST['LocalSelect']."\N      ");
                print_r($_POST['StatusSelect']."\N      ");
  
}