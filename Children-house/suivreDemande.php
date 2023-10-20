<?php

// Informations de connexion à la base de données
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur de la base de données
$motDePasse = ""; // Mot de passe de la base de données
$nomBaseDeDonnees = "dar_atfal"; // Nom de la base de données

// Connexion à la base de données
$conn = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

session_start();
 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dar atfal - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    <style>
    .form-container {
            margin-left: 250px;
            display: flex;
            justify-content: space-between;
        }

    </style>
   

</head>



<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fa-light fa-house-blank"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dar atfal</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fa-solid fa-house"></i>
                    <span>Page d'acceuil</span></a>
            </li>

        
            
            <!-- Nav Item - Dashboard -->
            
            <li class="nav-item active">
                <a class="nav-link" href="suivreDemande.php">
                    <i class="fa-solid fa-plus"></i>                    
                    <span>Suivre une demande</span></a>
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Utilisateurs
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-user"></i>
                    <span>Acteurs</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Identifier autant que :</h6>
                        <a class="collapse-item" href="loginDr.php">Directeur</a>
                        <a class="collapse-item" href="loginAc.php">Commission d'accueil</a>
                        <a class="collapse-item" href="loginDsp.php">Commission discipline</a>
                        <a class="collapse-item" href="loginSp.php">Superviseur</a>
                        <a class="collapse-item" href="loginGs.php">Guide social</a>

                    </div>
                </div>
            </li>

 
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                À propos de nous
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
          

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="organisation.php">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                    <span>Notre organisation</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-envelope"></i>                    
                    <span>Contactez-nous</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                

            

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <div class="class=h3 mb-0 text-gray-800"> 
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

        
                                
                </nav>
                
                <!-- End of Topbar -->
                <?php

// Vérification si un message est présent dans la session
if (isset($_SESSION['message']) && isset($_SESSION['message_type'])) {
    $message = $_SESSION['message'];
    $message_type = $_SESSION['message_type'];
    
    // Affichage du message avec la classe CSS appropriée
    echo "<div class='alert alert-$message_type'>$message</div>";
    
    // Suppression du message de la session
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}

// Le reste de votre code HTML ici
echo '
<div class="d-sm-flex align-items-center justify-content-between mb-4 form-container ml-2">
    <h1 class="h3 mb-0 text-gray-800">   Entrez les informations de votre demande :</h1>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4 form-container ml-2">
    <form action="chercheDemande.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="cin_tuteur" placeholder="CIN tuteur" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="nom_beneficiaire" placeholder="Nom bénéficiaire" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="prenom_beneficiaire" placeholder="Prénom bénéficiaire" required>
        </div>
        <button type="submit" class="btn btn-primary">Vérifier</button>
    </form>
</div>';

?>
                               
                        



</div>
        
                
        <div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Association Musulmane de Bienfaisance-Safi</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
      
    <!-- End of Page Wrapper -->

 


    <!-- Bootstrap core JavaScript-->
    <script src="https://kit.fontawesome.com/7fe36273ca.js" crossorigin="anonymous"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>





</body>

</html>
