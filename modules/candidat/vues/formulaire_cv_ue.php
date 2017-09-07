<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 29/08/2017
 * Time: 10:26
 */
include_once'global/init.php';
echo CHEMIN_MODELE;
echo CHEMIN_VUE;
echo CHEMIN_CONTROLEUR;
?>
<form  method="post" action="<?php echo CHEMIN_CONTROLEUR.'inscription.php'?>">
    <div class="input-field col s12">
        <select class="browser-default">
            <option value="" disabled selected>Choissez votre format</option>
            <option  value="cv_ue"> Format BM</option>
            <option  value="cv_jmn">Format UE</option>
            <option  value="cv_bm">Format JMN</option>
        </select>
    </div>
    <div class="mdl-grid">
        <div>
            <h5>Informations personnelles</h5>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="email" id="email" name ="email"/>
            <label class="mdl-textfield__label" for="email">Adresse email</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telephone" name="telephone"/>
            <label class="mdl-textfield__label" for="telephone">N° téléphone</label>
            <span class="mdl-textfield__error">Veuillez saisir uniquement les chiffres</span>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" id="nom" name="nom"/>
            <label class="mdl-textfield__label" for="nom">Nom(s)</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" id="prenom" name="prenom" />
            <label class="mdl-textfield__label" for="prenom">Prénom(s)</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--6-col">
            <input class="mdl-textfield__input" type="date" id="naissance" name="date_naiss"/>
            <label class="mdl-textfield__label" for="naissance">Date de naissance</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" id="nationalite" name="nationalite" />
            <label class="mdl-textfield__label" for="nationalite">Nationalité</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" id="etat_civil" name="etat_civil"/>
            <label class="mdl-textfield__label" for="etat_civil">Etat civil</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <label class="mdl-textfield__label" for="etat_civil">Education:</label>
            <select name="education">
                <option value="i">dffs</option>
                <option value="i">dffs</option>
                <option value="i">dffs</option>
            </select>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect"   type="submit" name="valider">
                <a href="index.php?module=candidat&amp;action=formulaire_cv_bm">Button</a>
            </button>
        </div>

        <!--
        <div class="mdl-cell mdl-cell--12-col">
            <div class="mdl-grid">
                <div class=" mdl-cell--10-col">
                    <h5>Education</h5>
                </div>
                <div class=" mdl-cell--2-col">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
                        <i class="material-icons">add</i>
                    </button>
                </div>
            </div>
            <ul class="collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header"><i class="mdi-image-filter-drama"></i>First</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
            </ul>
        </div>
        <div>
            <h5>Connaissances linguistiques: Indiquer les connaissances sur une échelle de 1 à 5 (1 – excellent; 5 - connaissances de base)</h5>
        </div>
        <div>
            <h5>Appartenance à un organisme professionnel</h5>
        </div>
        <div>
            <h5>Autres compétences</h5>
        </div>
        <div>
            <h5>Fonction actuelle</h5>
        </div>
        <div>
            <h5>Nombre d’années dans l’entreprise</h5>
        </div>
        <div>
            <h5>Qualifications principales: (utiles pour le projet)</h5>
        </div>
        <div>
            <h5>Expérience particulière dans la région</h5>
        </div>
        <div>
            <h5>Expérience professionnelle</h5>
        </div>
        <div>
            <h5>Autres information utiles: (par exemple, publications)</h5>
        </div>
        -->
    </div>
</form>
