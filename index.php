<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 22/08/2017
 * Time: 09:52
 */

// Initialisation
include 'global/init.php';

// D�but de la tamporisation de sortie
ob_start();

// Si un module est specifi�, on regarde s'il existe

if (!empty($_GET['module']))
{
    //$_SESSION['user']= $_GET['module'];
    $_SESSION['user']= 'candidat';
    $module = dirname(__FILE__).'/modules/'.$_GET['module'].'/';

    // Si l'action est specifi�e, on l'utilise, sinon, on tente une action par d�faut
    $action = (!empty($_GET['action'])) ? $_GET['action'].'.php' : 'index.php';

    // Si l'action existe, on l'ex�cute
    if (is_file($module.$action))
    {
        include $module.$action;

        // Sinon, on affiche la page d'accueil !
    } else {

        include 'global/accueil.php';
    }
    // Module non specifi� ou invalide ? On affiche la page d'accueil !
}
else
{
    include 'global/accueil.php';


}
$contenu = ob_get_clean();
include 'global/header_candidat.php';
echo $contenu;
include 'global/footer_candidat.php';


/*
$contenu = ob_get_clean();
if($_SESSION['user']== 'admin')
{
    include 'global/header_candidat.php';
    echo $contenu;
    include 'global/footer_candidat.php';
}
elseif ($_SESSION['user'] == 'admin')
{
    include 'global/header_admin.php';
    echo $contenu;
    include 'global/footer_admin.php';
}
*/