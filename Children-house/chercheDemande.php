<?php
// Informations de connexion à la base de données
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur de la base de données
$motDePasse = ""; // Mot de passe de la base de données
$nomBaseDeDonnees = "dar_atfal"; // Nom de la base de données

// Connexion à la base de données
$conn = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

// Récupération des données du formulaire
$cinTuteur = $_POST['cin_tuteur'];
$nomBeneficiaire = $_POST['nom_beneficiaire'];
$prenomBeneficiaire = $_POST['prenom_beneficiaire'];

// Recherche dans la table demande_valide
$query = "SELECT * FROM demande_valide WHERE cin_tuteur = '$cinTuteur'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Demande acceptée
    session_start();
    $_SESSION['message'] = "Votre demande est acceptée.";
    $_SESSION['message_type'] = "success";
} else {
    // Recherche dans la table demande
    $query = "SELECT * FROM demande WHERE cin_tuteur = '$cinTuteur'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Demande en cours de traitement
        session_start();
        $_SESSION['message'] = "Votre demande est en cours de traitement.";
        $_SESSION['message_type'] = "info";
    } else {
        // Demande non acceptée
        session_start();
        $_SESSION['message'] = "Votre demande n'est pas acceptée.";
        $_SESSION['message_type'] = "danger";
    }
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);

// Redirection vers la page suivreDemande.php
header("Location: suivreDemande.php");
exit();
?>
