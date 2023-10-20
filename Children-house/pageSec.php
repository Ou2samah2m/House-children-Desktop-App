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
    header("Location: loginSec.php"); // Redirige vers la page de connexion
    exit();
}
 
$sql = "SELECT * FROM demande_valide";
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM infraction";
$result_1 = mysqli_query($conn, $sql);

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
                        <a class="collapse-item" href="pageSec.php">Secrétaire</a>
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
          
                     <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small font-weight-bold">Secrétaire</span>
    

                            <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="logoutSec.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Déconnecter
                                </a>
                        </div> 
                    </li>  
                </nav>
                
                
                
                <!-- End of Topbar -->
                
                                 

                         <div class="d-sm-flex align-items-center justify-content-center mb-4 form-container ">
                         <h1 class="h3 mb-0 text-gray-800">Saisir les informations de la demande</h1>
                         </div>
                                
        <div class="d-sm-flex align-items-center justify-content-center mb-4 form-container ">
            <form action="confDemande.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nom_tuteur" placeholder="Nom tuteur" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="prenom_tuteur" placeholder="Prénom tuteur" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="cin_tuteur" placeholder="CIN tuteur" required>
                                </div>

                                <div class="form-group">
                                    <select class="form-control form-control-user" name="lien_parente_tuteur" placeholder="Lien de parenté avec le bénéficiaire " required>
                                    <option value="pere">Père</option>
                                    <option value="mere">Mère</option>
                                    <option value="autre">Autre</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nom_beneficiaire" placeholder="Nom bénéficiaire" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="prenom_beneficiaire" placeholder="Prénom bénéficiaire" required>
                                </div>
                             
                                <div class="form-group">
                                    <select class="form-control form-control-user" name="etat_beneficiaire" placeholder="Etat bénificaire" required>
                                    <option value="orphelin (père)">Père orphelin</option>
                                    <option value="orphelin(mére)">Mère orphelin</option>
                                    <option value="orphelin(Les deux parents)">Les deux parents orphelin</option>
                                    <option value="Père inconnu">Père inconnu</option>
                                    <option value="Les deux parent inconnus">Les deux parent inconnus</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="lieu_residence_beneficiaire" placeholder="Lieu de résidence du bénéficiaire" required>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" name="date_naissance_beneficiaire" placeholder="Date de naissance du bénéficiaire" required>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control form-control-user" name="cause_demande" placeholder="Cause de la demande"  rows="4" cols="50" required></textarea>
                                </div>
                                <div class="form-group">
                                <label for="dossier_medical">Dossier médical (PDF)</label>
                                <input type="file" class="form-control-file" name="dossier_medical"  accept=".pdf" required>
                                </div>
                                <div class="form-group">            
                                <label for="enquete_social">Enquete social (PDF)</label>
                                <input type="file" class="form-control-file" name="enquete_social" accept=".pdf" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
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