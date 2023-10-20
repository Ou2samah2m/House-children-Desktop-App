
<?php
// Récupérer les données du formulaire
$id_demande = $_POST['id_demande'];
$type_inf = $_POST['type_inf'];
$date_inf = $_POST['date_inf'];
$cause_inf = $_POST['cause_inf'];
$decision_inf = $_POST['decision_inf'];

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
$sql = "INSERT INTO infraction (date_inf, type_inf, cause_inf, decision_inf, id_demande) VALUES ('$date_inf', '$type_inf', '$cause_inf', '$decision_inf', $id_demande)";
if ($conn->query($sql) === TRUE) {
    echo "Les informations ont été enregistrées avec succès.";
    
} else {
    echo "Erreur lors de l'enregistrement des informations : " . $conn->error;
}


header("Location:infraction.php");

?>
