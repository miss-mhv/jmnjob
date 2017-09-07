<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 22/08/2017
 * Time: 11:34
 */
require_once"connexion.php";
function inscrire($nom, $prenom, $email, $date_naiss, $tel, $etat_civil, $nationalite) {

    // $pdo = PDO2::getInstance();
    $pdo = db_connect();
    $id=0;

    $requete = $pdo->prepare("INSERT INTO candidat SET
		nom = :nom,
		prenom = :prenom,
		email = :email,
		deta_naiss = :date_naissance,
		tel = :telephone,
		etat_civil =: etat_civil,
		date_inscription = NOW()");

    $requete->bindValue(':nom', $nom);
    $requete->bindValue(':prenom', $prenom);
    $requete->bindValue(':email',   $email);
    $requete->bindValue(':date_naissance',   $date_naiss);
    $requete->bindValue(':telephone',   $tel);
    $requete->bindValue(':etat_civil',   $etat_civil);
    $requete->bindValue(':nationalite',   $nationalite);

    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}
