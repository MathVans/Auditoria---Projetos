<?php
require __DIR__.'\vendor\autoload.php';
include('conexao.php');
include __DIR__.'/script\Cadastrar.php';
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

<head>
    <meta charset="utf-8">
    <title>Kempetro - Auditoria</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>




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

              

                        <button type="button" class="btn btn-primary" onclick="openModal()" data-toggle="modal" data-target="#exampleModal" data-whatever="testestes">Cadastrar</button>
                    
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
       //debugger;
         //  $('#PartialZone').load("core.php");
  </script>

<script type="text/javascript">
    function openModal(){
        $('#exampleModal').modal('show');
    }

    $('#exampleModal').on('show.bs.modal', function (event) {
    debugger;
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Cadastro de Projetos')
    modal.find('.modal-body input').val(recipient)
    });
</script>


</body>

</html>