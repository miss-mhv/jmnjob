<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 22/08/2017
 * Time: 09:54
 */
include 'global/config.php';

session_start();

include CHEMIN_MODELE.'connexion.php';

// Vérifie si l'utilisateur est connecté
function utilisateur_est_connecte() {
    return !empty($_SESSION['id']);
}

// On a besoin du modèle des admins et des candidats

include CHEMIN_MODELE.'admin.php';
include CHEMIN_MODELE.'candidat.php';
include CHEMIN_MODELE.'inscription.php';

