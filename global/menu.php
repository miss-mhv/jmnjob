<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 22/08/2017
 * Time: 09:55
 */
?>
<div id="menu">

  <h2>Menu</h2>

  <ul>
   <li><a href="index.php">Accueil</a></li>
  </ul>
    <h3>Espace membre</h3>

    <?php if (!utilisateur_est_connecte()) { ?>
        <ul>
            <li><a href="index.php?module=candidat&amp;action=inscription">Inscription</a></li>
            <li><a href="index.php?module=admin&amp;action=connexion">Connexion</a></li>
        </ul>
    <?php } else { ?>
        <p>Bienvenue, <?php echo htmlspecialchars($_SESSION['pseudo']); ?>.</p>
        <ul>
            <li><a href="index.php?module=admin&amp;action=afficher_profil">profil</a></li>
            <li><a href="index.php?module=admin&amp;action=deconnexion">Déconnexion</a></li>
        </ul>
    <?php } ?>

</div>