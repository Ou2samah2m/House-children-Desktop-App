<?php
$serveur = "localhost";
$dbname = "dar_atfal";
$user = "root";
$pass = "";

// On se connecte à la base de données
$dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Vérifier si le paramètre 'id_demande' est présent dans l'URL
if (isset($_GET['id_demande'])) {
    // Récupérer l'id_demande depuis le paramètre 'id_demande'
    $id_demande = $_GET['id_demande'];

    // Requête pour récupérer les informations de la demande
    $sth = $dbco->prepare("SELECT dossier_medical, enquete_social FROM demande WHERE id_demande = :id_demande");
    $sth->bindParam(':id_demande', $id_demande);
    $sth->execute();

    // Vérifier si la demande existe
    if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        // Récupérer les données du dossier_medical et de l'enquete_social
        $dossier_medical = $row['dossier_medical'];
        $enquete_social = $row['enquete_social'];

        // Vérifier si le dossier_medical existe
        if (!empty($dossier_medical)) {
            // Configurer les en-têtes HTTP pour le téléchargement du dossier_medical
            header('Content-Description: File Transfer');
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename=dossier_medical.pdf');
            header('Expires: 0');
            echo base64_decode($dossier_medical);
            exit;
        }

        // Vérifier si l'enquete_social existe
        if (!empty($enquete_social)) {
            // Configurer les en-têtes HTTP pour le téléchargement de l'enquete_social
            header('Content-Description: File Transfer');
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename=enquete_social.pdf');
            header('Expires: 0');
            echo base64_decode($enquete_social);
            exit;
        }
    }
}

// Rediriger vers une page d'erreur si la demande n'existe pas ou les fichiers ne sont pas disponibles
header("Location: erreur.php");
?>
