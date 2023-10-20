<?php
// Assurez-vous que l'ID de la demande est passé via la méthode GET
if (isset($_GET['id_demande'])) {
    $id_demande = $_GET['id_demande'];

    // Effectuez les opérations de suppression de la demande ici

    // Exemple d'utilisation de la fonction mysqli pour se connecter à la base de données
    $serveur = "localhost";
    $dbname = "dar_atfal";
    $user = "root";
    $pass = "";

    // Connexion à la base de données
    $connexion = new mysqli($serveur, $user, $pass, $dbname);

    // Vérification de la connexion
    if ($connexion->connect_error) {
        die("Erreur de connexion à la base de données : " . $connexion->connect_error);
    }

    // Requête de suppression de la demande
    $delete_query = "DELETE FROM demande WHERE id_demande = $id_demande";

    if ($connexion->query($delete_query) === TRUE) {
        // Redirigez l'utilisateur vers la page appropriée après la suppression de la demande
        header("Location: pageAc.php");
        exit();
    } else {
        echo "Erreur lors de la suppression de la demande : " . $connexion->error;
    }

    // Fermeture de la connexion à la base de données
    $connexion->close();
} else {
    // Gérer le cas où l'ID de la demande n'est pas passé correctement
    echo "ID de demande non spécifié.";
}
?>
