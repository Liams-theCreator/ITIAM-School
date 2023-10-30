<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'ecole';
$conn = mysqli($db_host, $db_user, $de_pas, $db_name);

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_de_naissance = $_POST['date_de_naissance'];
$ecole_universite = $_POST['ecole_universite'];
$specialisation = $_POST['specialisation'];
$date_debut_stage = $_POST['date_debut_stage'];

$sql = 'INSERT INTO stagiaire (nom, prenom, date_de_naissance, ecole_universite, specialisation, date_debut_stage) VALUES (:nom, :prenom, :date_de_naissance, :ecole_universite, :specialisation, :date_debut_stage)';
$stmt = $db->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':date_de_naissance', $date_de_naissance);
$stmt->bindParam(':ecole_universite', $ecole_universite);
$stmt->bindParam(':specialisation', $specialisation);
$stmt->bindParam(':date_debut_stage', $date_debut_stage);
$stmt->execute();

$db = null;

header('Location: ten.php');
