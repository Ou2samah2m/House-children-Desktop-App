<?php

// Informations de connexion à la base de données
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur de la base de données
$motDePasse = ""; // Mot de passe de la base de données
$nomBaseDeDonnees = "dar_atfal"; // Nom de la base de données

// Connexion à la base de données
$conn = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header("Location: loginAc.php"); // Redirige vers la page de connexion
        exit();
    }

    $sql = "SELECT * FROM demande_valide";
    $result = mysqli_query($conn, $sql);
 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Acceuil Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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
                        <a class="collapse-item" href="pageAc.php">Commission d'accueil</a>
                        <a class="collapse-item" href="loginDsp.php">Commission discipline</a>
                        <a class="collapse-item" href="loginSec.php">Secrétaire</a>
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

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Chercher..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Guide social</span>
                            <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="logoutGs.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Déconnecter
                                </a>
                                
                </nav>
                <!-- End of Topbar -->
                
                
                    <!-- Page Heading -->
                  <!--  <h1 class="h3 mb-2 text-gray-800">Demandes</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">Demandes d'addmission</a>.</p>
                            !-->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bénificaires</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>

                                           <th>ID bénéficaire</th>
                                            <th>Nom bénéficaire</th>
                                            <th>Prénom bénéficaire</th>
                                            <th>Etat bénéficaire</th>
                                            <th>Date naissance</th>
                                            <th>Enquete social</th>

                                        </tr>
                                         <?php
                                            // Afficher les données dans le tableau
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<tr>";
                                                echo "<td>".$row['id_demande']."</td>";
                                                echo "<td>".$row['nom_beneficiaire']."</td>";
                                                echo "<td>".$row['prenom_beneficiaire']."</td>";
                                                echo "<td>".$row['etat_beneficiaire']."</td>";
                                                echo "<td>".$row['date_naissance_beneficiaire']."</td>";
                                                echo "<td><a href='enqSc.php' class='btn btn-success btn-circle btn-sm'><i class='fa-solid fa-plus'></i></i></a></td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                       
                                    </thead> 
                                </table>
                            </div>  
                        </div>          
                   </div>
             </div>

   
                

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