<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 23/08/2017
 * Time: 13:34
 */
?>
<!doctype html>
<html lang="en">
<?php  include 'head.php'?>
<body>
<script src="libs/js/jquery.min.js"></script>
<script src="libs/materialize/materialize.min.js"></script>

<div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
    <header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">Material Design Lite</span>
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <div>
                    <?php if (!utilisateur_est_connecte()) { ?>
                        <ul>
                            <!--<li><a href="index.php?module=admin&amp;action=inscription">Inscription</a></li> -->
                            <li><a href="index.php?module=candidat&amp;action=vues/formulaire_cv_ue">Inscription</a></li>
                            <li><a href="index.php?module=admin&amp;action=connexion">Connexion</a></li>
                        </ul>
                    <?php } else { ?>
                        <p>Bienvenue, <?php echo htmlspecialchars($_SESSION['pseudo']); ?>.</p>
                        <ul>
                            <li><a href="index.php?module=admin&amp;action=afficher_profil">admin</a></li>
                            <li><a href="index.php?module=admin&amp;action=deconnexion">Déconnexion</a></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>
    <div class="demo-ribbon"></div>
    <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
            <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
            <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
                <div class="demo-crumbs mdl-color-text--grey-500">
                </div>