
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
     <!-- Utilisez la classe d'icône appropriée -->
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

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Bienvenue chez l'Association Musulmane de Bienfaisance-Safi  !</h1>
                    </div>

                      <!-- Collapsable Card Example -->
                      <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Présentation générale</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                L'Association Musulmane de Bienfaisance-Safi, créée en 1956, est une organisation caritative dévouée à apporter soutien et assistance aux plus 
                                vulnérables de notre communauté. Notre mission est de promouvoir le bien-être social et de répondre aux besoins
                                des orphelins et des personnes âgées.
                            </div>
                        </div>
                    </div>

                           <!-- Collapsable Card Example -->
                           <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-primary">Orphelinat</h6>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse show" id="collapseCardExample">
                                <div class="card-body">
                                    Notre association gère un orphelinat qui offre un foyer aimant 
                                    et sécurisé aux enfants qui ont perdu leurs parents. Nous veillons à leur éducation, 
                                    à leur développement personnel et à leur épanouissement, en leur offrant une éducation de qualité, 
                                    des soins médicaux et un soutien psychosocial.
                                </div>
                            </div>
                    </div>

                                  <!-- Earnings (Monthly) Card Example -->
                                  <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Foyer pour enfants</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">268 Bénificaires</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa-solid fa-hands-holding-child"></i>
                                                </div>
                                        </div>
                                    </div>
                                </div>
        
                                </div>

                    <!-- Collapsable Card Example -->
                    <div class="card shadow mb-4">
                     <!-- Card Header - Accordion -->
                     <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                         role="button" aria-expanded="true" aria-controls="collapseCardExample">
                         <h6 class="m-0 font-weight-bold text-primary">Maison de retraite</h6>
                     </a>
                     <!-- Card Content - Collapse -->
                     <div class="collapse show" id="collapseCardExample">
                         <div class="card-body">
                            Nous avons également établi une maison de retraite chaleureuse et accueillante pour nos aînés. Notre objectif est de leur offrir un environnement confortable et bienveillant, où ils peuvent profiter d'une vie enrichissante, recevoir des soins médicaux appropriés et bénéficier d'activités sociales stimulantes.
                         </div>
                     </div>

                </div>

                 <!-- Earnings (Annual) Card Example -->
                 <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Maison de retraite</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">58 Bénificaires</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-sharp fa-solid fa-person-cane"></i>                            </div>
                        </div>
                    </div>
                </div>
                 </div>

                
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Valeurs fondamentales</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/people-holding-hands-2102381-0.svg" alt="...">
                                    </div>
                                    <p>l'Association Musulmane de Bienfaisance-Safi, nous sommes guidés par les valeurs islamiques de compassion, de solidarité et de justice sociale. 
                                        Nous croyons en l'importance de tendre la main à ceux qui sont dans le besoin et de construire une société plus équitable et solidaire.</p>
                                    
                                </div>
                            </div>

                    
                   

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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