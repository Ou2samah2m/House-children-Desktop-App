
<?php
// Récupérer les données du formulaire
$id_demande = $_POST['id_demande'];
$date_sanction = $_POST['date_sanction'];
$type_sanction = $_POST['type_sanction'];
$description_sn = $_POST['description_sn'];

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
$sql = "INSERT INTO sanction (date_sanction, type_sanction, description_sn , id_demande) VALUES ( '$date_sanction', '$type_sanction', '$description_sn ', $id_demande)";
if ($conn->query($sql) === TRUE) {
    echo "Les informations ont été enregistrées avec succès.";
    
} else {
    echo "Erreur lors de l'enregistrement des informations : " . $conn->error;
}


header("Location:sanction.php");

?>
