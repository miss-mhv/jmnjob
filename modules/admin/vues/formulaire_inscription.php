<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 21/08/2017
 * Time: 14:37
 */
?>
    <h2>Inscription au site</h2>
<?php
if (!empty($erreurs_inscription)) {
    echo '<ul>'."\n";

    foreach($erreurs_inscription as $e) {

        echo ' <li>'.$e.'</li>'."\n";
    }

    echo '</ul>';
}
echo $form_inscription;
