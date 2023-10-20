<?php
// Assurez-vous que l'ID de la demande est passé via la méthode GET
if (isset($_GET['id_demande'])) {
    $id_demande = $_GET['id_demande'];

    // Effectuez les opérations d'acceptation de la demande ici

    // Exemple d'utilisation de PDO pour se connecter à la base de données
    $serveur = "localhost";
    $dbname = "dar_atfal";
    $user = "root";
    $pass = "";

    try {
        // Connexion à la base de données avec PDO
        $connexion = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);

        // Préparation de la requête d'insertion dans la table demande_validé
        $insert_query = "INSERT INTO demande_valide SELECT * FROM demande WHERE id_demande = :id_demande";

        // Liaison des paramètres
        $stmt = $connexion->prepare($insert_query);
        $stmt->bindParam(':id_demande', $id_demande);

        // Exécution de la requête
        if ($stmt->execute()) {
            // Suppression de la demande de la table demande
            $delete_query = "DELETE FROM demande WHERE id_demande = :id_demande";
            $stmt = $connexion->prepare($delete_query);
            $stmt->bindParam(':id_demande', $id_demande);
            $stmt->execute();

            // Redirection vers la page appropriée après l'acceptation de la demande
            header("Location: pageAc.php");
            exit();
        } else {
            echo "Erreur lors de l'acceptation de la demande.";
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }

} else {
    // Gérer le cas où l'ID de la demande n'est pas passé correctement
    echo "ID de demande non spécifié.";
}
?>
