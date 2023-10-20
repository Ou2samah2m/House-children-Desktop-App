<?php
// Récupérer les données du formulaire
$id_demande = $_POST['id_demande'];
$date_abs = $_POST['date_abs'];
$duree_abs = $_POST['duree_abs'];
$motif_abs = $_POST['motif_abs'];
$status_abs = $_POST['status_abs'];

// Effectuer la connexion à la base de données (vous devez configurer ces informations selon votre environnement)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dar_atfal";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Préparer et exécuter la requête SQL pour insérer les données dans la table
$sql = "INSERT INTO absence (date_abs, duree_abs, motif_abs, status_abs, id_demande) VALUES ('$date_abs', '$duree_abs', '$motif_abs', '$status_abs', $id_demande)";
if ($conn->query($sql) === TRUE) {
    echo "Les informations ont été enregistrées avec succès.";
    
} else {
    echo "Erreur lors de l'enregistrement des informations : " . $conn->error;
}

// Introduce output before modifying the header
echo "Some output";

header("Location: absence.php");
?>
