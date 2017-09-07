<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 29/08/2017
 * Time: 11:41
 */
require_once"../../modeles/inscription.php";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naiss = $_POST['date_naiss'];
$tel = $_POST['telephone'];
$email = $_POST['email'];
$etat_civil = $_POST['etat_civil'];
$nationalite = $_POST['nationalite'];

$id_utilisateur = inscrire($nom,$prenom,$email,$date_naiss,$tel,$etat_civil,$nationalite);



echo $nom, $prenom, $email, $etat_civil, $nationalite, $date_naiss;

//echo $id_utilisateur;