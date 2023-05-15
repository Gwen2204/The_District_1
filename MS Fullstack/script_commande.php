<?php
include 'header.php';
include_once ('classes/DAO.php');



//var_dump($_POST);
if(isset($_POST["nom"])) {
    $nom= $_POST["nom"];
}

if(isset($_POST["prenom"])) {
    $prenom= $_POST["prenom"];
}

if(isset($_POST["adresse"])) {
    $adresse= $_POST["adresse"];
}

if(isset($_POST["cp"])) {
    $cp= $_POST["cp"];
}

if(isset($_POST["ville"])) {
    $ville= $_POST["ville"];
}

if(isset($_POST["tel"])) {
    $tel= $_POST["tel"];
}

if(isset($_POST["email"])) {
    $email= $_POST["email"];
}




$plat_id=$_POST["plat_id"];
$quantity=$_POST["quantite"];
$prix=$_POST["prix"];

//infos pas saisies par l'utilisateur
$total = $prix*$quantity;
$date_commande = date("Y-m-d H:i:s");
$etat = "En.....";
$adresse_complete = $adresse . ", " . $cp . ", ". $ville;




var_dump ($_POST, $total, $date_commande, $adresse_complete);



?>

