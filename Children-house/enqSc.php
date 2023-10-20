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
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <div class="class=h3 mb-0 text-gray-800">
                                 <a href="pageSp.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                 <i class="fa-solid fa-arrow-left"></i> Retour</a>
                                

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>  
                </nav>
                
                
                <!-- End of Topbar -->
                <?php
                                        // Récupérer les ID bénéficiaires depuis la table demande_valide
                                        $sql = "SELECT id_demande FROM demande_valide";
                                        $result = $conn->query($sql);

                                        // Vérifier s'il y a des résultats
                                        if ($result->num_rows > 0) {
                                            // Créer un tableau pour stocker les ID bénéficiaires
                                            $id_beneficiaires = array();

                                            // Parcourir les résultats et stocker les ID bénéficiaires dans le tableau
                                            while ($row = $result->fetch_assoc()) {
                                                $id_beneficiaires[] = $row["id_demande"];
                                            }
                                        }

                                        // Fermer la connexion à la base de données
                                        $conn->close();
                                        ?>
                               
                          
                <div class="d-sm-flex align-items-center justify-content-between mb-4 form-container ml-2">
        <h1 class="h3 mb-0 text-gray-800"> Saisir l'Enquete sociale</h1>
    </div>
                              
    

    <div class="d-sm-flex align-items-center justify-content-between mb-4 form-container ml-2">
    <form action="Add_inf.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                            <label for="id_beneficiaire">ID bénéficiaire :</label>
                                <select class="form-control form-control-user" name="id_demande" placeholder="ID bénéficiaire" required>
                                <?php
                                // Afficher les options pour les ID bénéficiaires
                                foreach ($id_beneficiaires as $id) {
                                    echo "<option value='$id'>$id</option>";
                                }
                                ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="type_inf" placeholder="Type d'infraction" required>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control form-control-user" name="date_inf" placeholder="Date d'infraction" required>
                            </div>
                            <div class="form-group">
                            <textarea type="text" class="form-control form-control-user" name="cause_inf" placeholder="Cause d'infraction" rows="4" cols="50" required></textarea>
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control form-control-user" name="decision_inf" placeholder="Décision" rows="4" cols="50" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Envoyer</button>
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
