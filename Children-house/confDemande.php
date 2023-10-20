<?php
$serveur = "localhost";
$dbname = "dar_atfal";
$user = "root";
$pass = "";

//On se connecte à la BDD
$dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Vérifiez que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") 

    // Récupérer les données du formulaire
    $nom_tuteur = $_POST["nom_tuteur"];
    $prenom_tuteur = $_POST["prenom_tuteur"];
    $cin_tuteur = $_POST["cin_tuteur"];
    $lien_parente_tuteur = $_POST["lien_parente_tuteur"];
    $nom_beneficiaire = $_POST["nom_beneficiaire"];
    $prenom_beneficiaire = $_POST["prenom_beneficiaire"];
    $etat_benificaire = $_POST["etat_beneficiaire"];
    $lieu_residence_beneficiaire = $_POST["lieu_residence_beneficiaire"];
    $date_naissance_beneficiaire = $_POST["date_naissance_beneficiaire"];
    $cause_demande = $_POST["cause_demande"];

// Traitement des fichiers PDF
$dossier_medical_tmp = $_FILES["dossier_medical"]["tmp_name"];
$dossier_medical = null;
if ($dossier_medical_tmp != "") {
    $dossier_medical_content = file_get_contents($dossier_medical_tmp);
    $dossier_medical = base64_encode($dossier_medical_content);
}

$enquete_social_tmp = $_FILES["enquete_social"]["tmp_name"];
$enquete_social = null;
if ($enquete_social_tmp != "") {
    $enquete_social_content = file_get_contents($enquete_social_tmp);
    $enquete_social = base64_encode($enquete_social_content);
}


   $sth = $dbco->prepare("
    INSERT INTO demande (id_demande, nom_tuteur, prenom_tuteur, cin_tuteur, lien_parente_tuteur, nom_beneficiaire, prenom_beneficiaire, etat_beneficiaire, lieu_residence_beneficiaire, date_naissance_beneficiaire, cause_demande, dossier_medical, enquete_social) 
    VALUES (:id_demande, :nom_tuteur, :prenom_tuteur, :cin_tuteur, :lien_parente_tuteur, :nom_beneficiaire, :prenom_beneficiaire, :etat_benificaire, :lieu_residence_beneficiaire, :date_naissance_beneficiaire, :cause_demande, :dossier_medical, :enquete_social)
");


    $id_demande = null; // Remplacer par l'id de la demande

    $sth->bindParam(':id_demande', $id_demande);
    $sth->bindParam(':nom_tuteur', $nom_tuteur);
    $sth->bindParam(':prenom_tuteur', $prenom_tuteur);
    $sth->bindParam(':cin_tuteur', $cin_tuteur);
    $sth->bindParam(':lien_parente_tuteur', $lien_parente_tuteur);
    $sth->bindParam(':nom_beneficiaire', $nom_beneficiaire);
    $sth->bindParam(':prenom_beneficiaire', $prenom_beneficiaire);
    $sth->bindParam(':etat_benificaire', $etat_benificaire);
    $sth->bindParam(':lieu_residence_beneficiaire', $lieu_residence_beneficiaire);
    $sth->bindParam(':date_naissance_beneficiaire', $date_naissance_beneficiaire);
    $sth->bindParam(':cause_demande', $cause_demande);
    $sth->bindParam(':dossier_medical',$dossier_medical);
    $sth->bindParam(':enquete_social',$enquete_social);



$sth->execute();
header("Location:pageSec.php");



?>