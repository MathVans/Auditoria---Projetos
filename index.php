<?php

require __DIR__.'\vendor\autoload.php';
include('conexao.php');
include __DIR__.'\script\Cadastrar.php';

use App\Entity\Projeto;
$projetos = Projeto::getProjeto();

session_start();

if(!isset($_SESSION['user'])){
   // header('Location: signin.php');
}else{
     $user = $_SESSION['user'];
     $busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);
}

?>



<!DOCTYPE html>
<html lang="en">

                <?php
                //  ---------------------- HEADER
                    include __DIR__.'/includes/header.php';
                ?>



<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

                <?php
                //  ----------------------   SIDEBAR
                include __DIR__.'/includes/sidebar.php';
                ?>

        <!-- Content Start -->
        <div class="content">            
                <?php
                //  ---------------------- NAVBAR
                    include __DIR__.'/includes/navbar.php';
                ?>
            <!-- List Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        
                <form method="get" class="d-none d-md-flex ms-3 mb-0">
                    <input class="form-control border-0 " type="text" name="busca" placeholder="Procurar Projeto" value="<?=$busca?>">
                    <button type="submit" class="btn btn-primary m-2" >Procurar</button>
                </form>

              

                        <button type="button" class="btn btn-primary g-4" onclick="openModal()" data-toggle="modal" data-target="#exampleModal" data-whatever="testestes">Cadastrar</button>
                    
                    <!--  MODAL    -->               
                    <?php
                    //  ----------------------
                            include __DIR__.'/includes/modal.php';
                    ?>
                                       
                    <!--FIM MODAL-->
                    
                    
                    </div>
                    <div class="table-responsive">
                <?php
                //  ---------------------- TABELA
                        include __DIR__.'/includes/table.php';
                ?>
                    </div>
                </div>
            </div>
      
            <!-- Footer Start -->
            <?php
            //  ---------------------- FOOTER
                    include __DIR__.'/includes/footer.php';
            ?>
            <!-- Footer End -->
        </div>

        <!-- Content End -->
                                

        <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


<script type="text/javascript">
    function openModal(){
        $('#exampleModal').modal('show');
    }
</script>


</body>

</html>