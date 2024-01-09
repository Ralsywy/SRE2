@extends('base')


@section('content')
<h1>Inscrits</h1>

<div class="form-outer">
    <form action="#">
            <!---  Page 1 : INFORMATIONS PERSONNELLES  --->
        <div class="page">
            <div class="title">Informations personnelles :</div>
            <div class="field">
                <div class="label">Date de contact</div>
                <input type="date" name="dte_contact">
            </div>
            <div class="field">
                <div class="label">Origine du contact</div>
                <input type="text" name="origine_contact">
            </div>
            <div class="field">
                <div class="label">Inscrit aux restos du coeur</div>
                <input type="radio" name="is_rdc" value="1" id="oui_rdc">
                <label class="label" for="oui_rdc">Oui</label>
                <input type="radio" name="is_rdc" value="0" id="non_rdc">
                <label class="label" for="non_rdc">Non</label>
            </div>
            <!--- Si oui --->
            <div class="field">
                <div class="label">N°</div>
                <input type="text" name="numero">
            </div>
            <div class="field">
                <div class="label">Centre</div>
                <input type="text" name="centre">
            </div>
            <div class="field">
                <div class="label">Jour</div>
                <input type="text" name="jour">
            </div>
            <!--- Fin --->
            <div class="field">
                <div class="label">Bénévole aux restos du coeur</div>
                <input type="radio" name="is_benevole" value="1" id="oui_benevole">
                <label class="label" for="oui_benevole">Oui</label>
                <input type="radio" name="is_benevole" value="0" id="non_benevole">
                <label class="label" for="non_benevole">Non</label>
            </div>
            <div class="field">
                <div class="label">Accompagnateur SRE</div>
                <select name="pseudo">
                    <option value="pseudo">Choisir un accompagnateur</option>
                </select>
            </div>
            <div class="field">
                <button>Suivant</button>
            </div>
            <!---  Page 2 : COORDONNEES  --->
            <div class="page">
                <div class="title">Coordonnées :</div>
                <div class="field">
                    <div class="label">Civilité</div>
                    <select name="civilite">
                        <option value="Aucune">Choisir une civilité</option>
                        <option value="Madame">Madame</option>
                        <option value="Mademoiselle">Mademoiselle</option>
                        <option value="Monsieur">Monsieur</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Nom</div>
                    <input type="text" name="nom">
                </div>
                <div class="field">
                    <div class="label">Prénom</div>
                    <input type="text" name="prenom">
                </div>
                <div class="field">
                    <div class="label">Date de naissance</div>
                    <input type="date" name="dte_naissance">
                </div>
                <div class="field">
                    <div class="label">Nationalité</div>
                    <select name="nationalite">
                        <option value="Aucune">Choisir une nationalité</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Adresse</div>
                    <input type="text" name="adresse">
                </div>
                <div class="field">
                    <div class="label">Code Postal</div>
                    <input type="text" name="code_postal">
                </div>
                <div class="field">
                    <div class="label">Ville</div>
                    <input type="text" name="ville">
                </div>
                <div class="field">
                    <div class="label">Téléphone</div>
                    <input type="number" name="telephone">
                </div>
                <div class="field">
                    <div class="label">E-mail</div>
                    <input type="mail" name="email">
                </div>
                <div class="field">
                    <div class="label">Statue</div>
                    <select name="statue">
                        <option value="Aucune">Choisir un statue</option>
                        <option value="celibataire">Célibataire</option>
                        <option value="marie">Marié(e)</option>
                        <option value="divorce">Divorcé(e)</option>
                        <option value="veuf">Veuf(ve)</option>
                        <option value="pacse">Pacsé(e)</option>
                    </select>
                </div>
                <div class="field btns">
                    <button class="next-1 next">Suivant</button>
                    <button class="prev-1 prev">Précédent</button>
                </div>
            </div>
            <!---  Page 3 : SITUATION PERSONNELLE  --->
            <div class="page">
                <div class="title">Situation personnelle :</div>
                <div class="field">
                    <div class="label">Enfant à charge</div>
                    <input type="radio" name="is_enfant" value="1" id="oui_rdc">
                    <label class="label" for="oui_enfant">Oui</label>
                    <input type="radio" name="is_enfant" value="0" id="non_rdc">
                    <label class="label" for="non_enfant">Non</label>
                </div>
                <!--- Si oui --->
                <div class="field">
                    <div class="label">Nombre d'enfants </div>
                    <input type="number" name="nb_enfant">
                </div>
                <div class="field">
                    <div class="label">Nom de l'enfant </div>
                    <input type="text" name="nom">
                </div>
                <div class="field">
                    <div class="label">Date de naissance de l'enfant </div>
                    <input type="text" name="dte_naissance">
                </div>
                <!--- Fin --->
                <div class="field">
                    <div class="label">Nature des revenus</div>
                    <select name="nature_revenus">
                        <option value="Aucun">Choisir un revenus</option>
                        <option value="salaire">Salaire</option>
                        <option value="rsa">RSA</option>
                        <option value="are">ARE</option>
                        <option value="aah">AAH</option>
                        <option value="retraite">Pension de retraite</option>
                        <option value="autre">Autre</option>
                        <option value="Aucun">Aucune</option>
                    </select>
                </div>
                <!--- Si autre --->
                <div class="field">
                    <div class="label">Préciser le type de revenu</div>
                    <input type="text" name="autre_revenus">
                </div>
                <!--- Fin --->
                <div class="field">
                    <div class="label">Inscrit à France travail</div>
                    <input type="radio" name="inscrit_pole_emploi" value="oui" id="oui_pole_emplois">
                    <label class="label" for="oui_pole_emplois">Oui</label>
                    <input type="radio" name="inscrit_pole_emploi" value="non" id="non_pole_emplois">
                    <label class="label" for="non_pole_emplois">Non</label>
                </div>
                <!--- Si oui --->
                <div class="field">
                    <div class="label">Date d'inscription à France travail</div>
                    <input type="date" name="dte_inscription">
                </div>
                <div class="field">
                    <div class="label">Nom référent</div>
                    <input type="date" name="nom_referent">
                </div>
                <!--- Fin --->
                <div class="field">
                    <div class="label">Inscrit à Soélis</div>
                    <input type="radio" name="inscrit_pole_emploi" value="oui" id="oui_pole_emplois">
                    <label class="label" for="oui_pole_emplois">Oui</label>
                    <input type="radio" name="inscrit_pole_emploi" value="non" id="non_pole_emplois">
                    <label class="label" for="non_pole_emplois">Non</label>
                </div>
                <!--- Si oui --->
                <div class="field">
                    <div class="label">Date d'inscription à Soélis</div>
                    <input type="date" name="dte_inscription">
                </div>
                <div class="field">
                    <div class="label">Nom référent</div>
                    <input type="date" name="nom_referent">
                </div>
                <!--- Fin --->
                <div class="field btns">
                    <button class="next-2 next">Suivant</button>
                    <button class="prev-2 prev">Précédent</button>
                </div>
            </div>
            <!---  Page 4 : NIVEAU DE FORMATION  --->
            <div class="page">
                <div class="title">Coordonnées :</div>
                <div class="field">
                    <div class="label">Date de contact</div>
                    <input type="date" name="dte_contact">
                </div>
                <div class="field">
                    <div class="label">Origine du contact</div>
                    <input type="text" name="origine_contact">
                </div>
                <div class="field">
                    <div class="label">Inscrit aux restos du coeur</div>
                    <input type="radio" name="is_rdc" value="1" id="oui_rdc">
                    <label class="label" for="oui_rdc">Oui</label>
                    <input type="radio" name="is_rdc" value="0" id="non_rdc">
                    <label class="label" for="oui_rdc">Non</label>
                </div>
                <div class="field">
                    <div class="label">Bénévole aux restos du coeur</div>
                    <input type="radio" name="is_benevole" value="1" id="oui_benevole">
                    <label class="label" for="oui_benevole">Oui</label>
                    <input type="radio" name="is_benevole" value="0" id="non_benevole">
                    <label class="label" for="non_benevole">Non</label>
                </div>
                <div class="field">
                    <div class="label">Accompagnateur SRE</div>
                    <select name="pseudo">
                        <option value="pseudo">Choisir un accompagnateur</option>
                    </select>
                </div>
                <div class="field btns">
                    <button class="next-3 next">Suivant</button>
                    <button class="prev-3 prev">Précédent</button>
                </div>
            </div>
            <!---  Page 5 : LANGUES  --->
            <div class="page">
                <div class="title">Coordonnées :</div>
                <div class="field">
                    <div class="label">Date de contact</div>
                    <input type="date" name="dte_contact">
                </div>
                <div class="field">
                    <div class="label">Origine du contact</div>
                    <input type="text" name="origine_contact">
                </div>
                <div class="field">
                    <div class="label">Inscrit aux restos du coeur</div>
                    <input type="radio" name="is_rdc" value="1" id="oui_rdc">
                    <label class="label" for="oui_rdc">Oui</label>
                    <input type="radio" name="is_rdc" value="0" id="non_rdc">
                    <label class="label" for="oui_rdc">Non</label>
                </div>
                <div class="field">
                    <div class="label">Bénévole aux restos du coeur</div>
                    <input type="radio" name="is_benevole" value="1" id="oui_benevole">
                    <label class="label" for="oui_benevole">Oui</label>
                    <input type="radio" name="is_benevole" value="0" id="non_benevole">
                    <label class="label" for="non_benevole">Non</label>
                </div>
                <div class="field">
                    <div class="label">Accompagnateur SRE</div>
                    <select name="pseudo">
                        <option value="pseudo">Choisir un accompagnateur</option>
                    </select>
                </div>
                <div class="field btns">
                    <button class="next-4 next">Suivant</button>
                    <button class="prev-4 prev">Précédent</button>
                </div>
            </div>
            <!---  Page 6 : PLAN D'ACTION  --->
            <div class="page">
                <div class="title">Coordonnées :</div>
                <div class="field">
                    <div class="label">Date de contact</div>
                    <input type="date" name="dte_contact">
                </div>
                <div class="field">
                    <div class="label">Origine du contact</div>
                    <input type="text" name="origine_contact">
                </div>
                <div class="field">
                    <div class="label">Inscrit aux restos du coeur</div>
                    <input type="radio" name="is_rdc" value="1" id="oui_rdc">
                    <label class="label" for="oui_rdc">Oui</label>
                    <input type="radio" name="is_rdc" value="0" id="non_rdc">
                    <label class="label" for="oui_rdc">Non</label>
                </div>
                <div class="field">
                    <div class="label">Bénévole aux restos du coeur</div>
                    <input type="radio" name="is_benevole" value="1" id="oui_benevole">
                    <label class="label" for="oui_benevole">Oui</label>
                    <input type="radio" name="is_benevole" value="0" id="non_benevole">
                    <label class="label" for="non_benevole">Non</label>
                </div>
                <div class="field">
                    <div class="label">Accompagnateur SRE</div>
                    <select name="pseudo">
                        <option value="pseudo">Choisir un accompagnateur</option>
                    </select>
                </div>
                <div class="field btns">
                    <button class="next-5 next">Suivant</button>
                    <button class="prev-5 prev">Précédent</button>
                </div>
            </div>
            <!---  Page 7 : RENDEZ-VOUS  --->
            <div class="page">
                <div class="title">Coordonnées :</div>
                <div class="field">
                    <div class="label">Date de contact</div>
                    <input type="date" name="dte_contact">
                </div>
                <div class="field">
                    <div class="label">Origine du contact</div>
                    <input type="text" name="origine_contact">
                </div>
                <div class="field">
                    <div class="label">Inscrit aux restos du coeur</div>
                    <input type="radio" name="is_rdc" value="1" id="oui_rdc">
                    <label class="label" for="oui_rdc">Oui</label>
                    <input type="radio" name="is_rdc" value="0" id="non_rdc">
                    <label class="label" for="oui_rdc">Non</label>
                </div>
                <div class="field">
                    <div class="label">Bénévole aux restos du coeur</div>
                    <input type="radio" name="is_benevole" value="1" id="oui_benevole">
                    <label class="label" for="oui_benevole">Oui</label>
                    <input type="radio" name="is_benevole" value="0" id="non_benevole">
                    <label class="label" for="non_benevole">Non</label>
                </div>
                <div class="field">
                    <div class="label">Accompagnateur SRE</div>
                    <select name="pseudo">
                        <option value="pseudo">Choisir un accompagnateur</option>
                    </select>
                </div>
                <div class="field btns">
                    <button class="next-6 next">Suivant</button>
                    <button class="prev-6 prev">Précédent</button>
                </div>
            </div>
            <!---  Page 8 : INFORMATIONS COMPLEMENTAIRES  --->
            <div class="page">
                <div class="title">Coordonnées :</div>
                <div class="field">
                    <div class="label">Date de contact</div>
                    <input type="date" name="dte_contact">
                </div>
                <div class="field">
                    <div class="label">Origine du contact</div>
                    <input type="text" name="origine_contact">
                </div>
                <div class="field">
                    <div class="label">Inscrit aux restos du coeur</div>
                    <input type="radio" name="is_rdc" value="1" id="oui_rdc">
                    <label class="label" for="oui_rdc">Oui</label>
                    <input type="radio" name="is_rdc" value="0" id="non_rdc">
                    <label class="label" for="oui_rdc">Non</label>
                </div>
                <div class="field">
                    <div class="label">Bénévole aux restos du coeur</div>
                    <input type="radio" name="is_benevole" value="1" id="oui_benevole">
                    <label class="label" for="oui_benevole">Oui</label>
                    <input type="radio" name="is_benevole" value="0" id="non_benevole">
                    <label class="label" for="non_benevole">Non</label>
                </div>
                <div class="field">
                    <div class="label">Accompagnateur SRE</div>
                    <select name="pseudo">
                        <option value="pseudo">Choisir un accompagnateur</option>
                    </select>
                </div>
                <div class="field btns">
                    <button class="next-7 next">Suivant</button>
                    <button class="prev-7 prev">Précédent</button>
                </div>
            </div>
    </form>
</div>
@endsection
