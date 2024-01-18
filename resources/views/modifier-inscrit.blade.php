@extends('base')


@section('content')
<div class="body hidden">
    <div class="container">
        <Header>Modification d'un suivis</Header>
        <header>{{$inscrit->prenom}} {{$inscrit->nom}}</header>
        <div class="progress-bar">
            <div class="step">
                <p>1</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>2</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>3</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>4</p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>5</p>
                <div class="bullet">
                    <span>5</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>6</p>
                <div class="bullet">
                    <span>6</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>
    <div class="form-outer">
        <form action="#">
                <!---  Page 1 : INFORMATIONS PERSONNELLES  --->
            <div class="page 1 slidepage" id="page1">
                <div class="title hidden">Informations personnelles :</div>
                <div class="field">
                    <div class="label">Date de contact</div>
                    <input type="date" name="dte_contact">
                </div>
                <div class="field">
                    <div class="label">Origine du contact</div>
                    <input type="text" name="origine_contact" value="{{$inscrit->origine_contact}}">
                </div>
            
                    <div class="label">Inscrit aux restos du coeur</div>
                    <input type="radio" name="is_rdc" value="1" onclick="hideshowrdc(1)" id="oui_rdc"  @if ($inscrit->is_rdc == 1) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="oui_rdc">Oui</label>
                    <input type="radio" name="is_rdc" value="0" onclick="hideshowrdc(2)" id="non_rdc"  @if ($inscrit->is_rdc == 0) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_rdc">Non</label>
                
                <!--- Si oui --->
                <div id="div_rdc" class="hidden">
                <div class="field">
                    <div class="label">N°</div>
                    <input type="text" name="numero" value="{{$inscrit->rdc->numero}}">
                </div>
                <div class="field">
                    <div class="label">Centre</div>
                    <input type="text" name="centre" value="{{$inscrit->rdc->centre}}">
                </div>
                <div class="field">
                    <div class="label">Jour</div>
                    <input type="text" name="jour" value="{{$inscrit->rdc->jour}}">
                </div>
                </div>
                <!--- Fin --->
                
                    <div class="label">Bénévole aux restos du coeur</div>
                    <input type="radio" name="is_benevole" value="1" id="oui_benevole" @if ($inscrit->is_benevole == 1) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="oui_benevole">Oui</label>
                    <input type="radio" name="is_benevole" value="0" id="non_benevole" @if ($inscrit->is_benevole == 0) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_benevole">Non</label>
                
                <div class="field">
                    <div class="label">Accompagnateur SRE</div>
                    <select name="pseudo">
                        <option value="pseudo">Choisir un accompagnateur</option>
                    </select>
                </div>
                <div class="field nextBtn">
                    <a>Suivant</a>
                </div>
            </div>
                <!---  Page 2 : COORDONNEES  --->
                <div class="page 2" id="page2">
                    <div class="title">Coordonnées :</div>
                    <div class="field">
                        <div class="label">Civilité</div>
                        <select name="civilite">
                            <option value="Aucune" @if ($inscrit->civilite == "Aucune") @selected(true) @endif>Choisir une civilité</option>
                            <option value="Madame" @if ($inscrit->civilite == "Madame") @selected(true) @endif>Madame</option>
                            <option value="Mademoiselle" @if ($inscrit->civilite == "Mademoiselle") @selected(true) @endif>Mademoiselle</option>
                            <option value="Monsieur" @if ($inscrit->civilite == "Monsieur") @selected(true) @endif>Monsieur</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Nom</div>
                        <input type="text" name="nom" value="{{$inscrit->nom}}">
                    </div>
                    <div class="field">
                        <div class="label">Prénom</div>
                        <input type="text" name="prenom" value="{{$inscrit->prenom}}">
                    </div>
                    <div class="field">
                        <div class="label">Date de naissance</div>
                        <input type="date" name="dte_naissance" value="{{$inscrit->dte_naissance}}">
                    </div>
                    <div class="field">
                        <div class="label">Nationalité</div>
                        <select name="nationalite">
                            <option value="Aucune">Choisir une nationalité</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Adresse</div>
                        <input type="text" name="adresse" value="{{$inscrit->adresse}}">
                    </div>
                    <div class="field">
                        <div class="label">Code Postal</div>
                        <input type="text" name="code_postal" value="{{$inscrit->code_postal}}">
                    </div>
                    <div class="field">
                        <div class="label">Ville</div>
                        <input type="text" name="ville" value="{{$inscrit->ville}}">
                    </div>
                    <div class="field">
                        <div class="label">Téléphone</div>
                        <input type="number" name="telephone" value="{{$inscrit->telephone}}">
                    </div>
                    <div class="field">
                        <div class="label">E-mail</div>
                        <input type="mail" name="email" value="{{$inscrit->email}}">
                    </div>
                    <div class="field">
                        <div class="label">Situation personnelle</div>
                        <select name="statue">
                            <option value="Aucune" @if ($inscrit->statue == "Aucune") @selected(true) @endif>Choisir une situation personnel</option>
                            <option value="celibataire" @if ($inscrit->statue == "celibataire") @selected(true) @endif>Célibataire</option>
                            <option value="marie" @if ($inscrit->statue == "marie") @selected(true) @endif>Marié(e)</option>
                            <option value="divorce" @if ($inscrit->statue == "divorce") @selected(true) @endif>Divorcé(e)</option>
                            <option value="veuf" @if ($inscrit->statue == "veuf") @selected(true) @endif>Veuf(ve)</option>
                            <option value="pacse" @if ($inscrit->statue == "pacse") @selected(true) @endif>Pacsé(e)</option>
                        </select>
                    </div>
                    <div class="field btns">
                        <a class="prev-1 prev">Précédent</a>
                        <a class="next-1 next">Suivant</a>
                    </div>
                </div>
                <!---  Page 3 : SITUATION PERSONNELLE  --->
                <div class="page 3" id="page3">
                    <div class="title">Situation personnelle :</div>
                    
                        <div class="label">Enfant à charge</div>
                        <input type="radio" name="is_enfant" value="1" onclick="hideshowenfant(1)" id="oui_enfant" @if ($inscrit->is_enfant == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_enfant">Oui</label>
                        <input type="radio" name="is_enfant" value="0" onclick="hideshowenfant(2)" id="non_enfant" @if ($inscrit->is_enfant == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_enfant">Non</label>
                    
                    <!--- Si oui --->
                    <div id="div_enfant" class="hidden">
                    <div class="field">
                        <div class="label">Nombre d'enfants </div>
                        <input type="number" name="nb_enfant" id="nombre_enfant">
                    </div>
        <!--- Pour chaque enfant --->
        <div id="boite" class="field3"></div>
    </div>
    
    <script>
        // Récupérer la référence de l'input nombre_enfant
        const inputNombreEnfant = document.getElementById('nombre_enfant');
        
        // Écouter l'événement de modification de l'input
        inputNombreEnfant.addEventListener('change', () => {
          // Récupérer le nombre d'enfants à partir de la valeur de l'input
          const nombreEnfant = parseInt(inputNombreEnfant.value);
        
          // Référence à l'élément parent où les divs doivent être ajoutés
          const parentElement = document.getElementById('boite');
        
          // Vider le contenu précédent
          parentElement.innerHTML = '';
        
          // Créer et ajouter les divs en fonction du nombre d'enfants
          for (let i = 0; i < nombreEnfant; i++) {
            // Créer un élément div
            const div = document.createElement('div');
            div.id = 'boite';
            const div2 = document.createElement('div');
            div2.id = 'boite2';
        
            // Créer un élément label pour le nom de l'enfant
            const labelNomEnfant = document.createElement('label');
            labelNomEnfant.htmlFor = `nom_enfant`;
            labelNomEnfant.textContent = `Nom prénom de l'enfant ${i + 1} : `;
        
            // Créer un élément input pour le nom de l'enfant
            const inputNomEnfant = document.createElement('input');
            inputNomEnfant.type = 'text';
            inputNomEnfant.name = `nom_enfant${i + 1}`; // Ajout d'un name différent
            inputNomEnfant.classList.add('nom_enfant');
        
            // Créer un élément label pour la date de naissance de l'enfant
            const labelDateNaissance = document.createElement('label');
            labelDateNaissance.htmlFor = 'dte_naissance_enfant';
            labelDateNaissance.textContent = `Date de naissance de l'enfant ${i + 1} : `;
            labelDateNaissance.classList.add('dte_naissance_enfant');
        
        
            // Créer un élément input pour la date de naissance de l'enfant
            const inputDateNaissance = document.createElement('input');
            inputDateNaissance.type = 'date';
            inputDateNaissance.name = `dte_naissance${i + 1}`; // Ajout d'un name différent
            inputDateNaissance.classList.add('dte_naissance_enfant');
        
            // Ajouter les éléments créés au div parent
            div.appendChild(labelNomEnfant);
            div.appendChild(inputNomEnfant);
            div2.appendChild(labelDateNaissance);
            div2.appendChild(inputDateNaissance);
        
            // Ajouter le div parent à l'élément parent
            parentElement.appendChild(div);
            parentElement.appendChild(div2);
          }
        });
        
                </script>
                    <!--- Fin --->
                    <div class="field hidden">
                        <div class="label">Nature des revenus</div>
                        <select name="nature_revenus" onchange="hideshowrevenus()" id="revenus">
                            <option value="Aucun" @if ($inscrit->nature_revenus == "Aucun") @selected(true) @endif>Choisir un revenus</option>
                            <option value="salaire" @if ($inscrit->nature_revenus == "salaire") @selected(true) @endif>Salaire</option>
                            <option value="rsa" @if ($inscrit->nature_revenus == "rsa") @selected(true) @endif>RSA</option>
                            <option value="are" @if ($inscrit->nature_revenus == "are") @selected(true) @endif>ARE</option>
                            <option value="aah" @if ($inscrit->nature_revenus == "aah") @selected(true) @endif>AAH</option>
                            <option value="retraite" @if ($inscrit->nature_revenus == "retraite") @selected(true) @endif>Pension de retraite</option>
                            <option value="autre" @if ($inscrit->nature_revenus == "autre") @selected(true) @endif>Autre</option>
                            <option value="Aucun" @if ($inscrit->nature_revenus == "Aucun") @selected(true) @endif>Aucune</option>
                        </select>
                    </div>
                    <!--- Si autre --->
                    <div id="preciser">
                    <div class="field">
                        <div class="label">Préciser le type de revenus</div>
                        <input type="text" name="autre_revenus" value="{{$inscrit->autre_revenus}}">
                    </div>
                    </div>
                    <!--- Fin --->
                    
                    <div class="label">Demandeur d'asile</div>
                    <input type="radio" name="is_demande_asile" value="oui" onclick="hideshowasile(1)" id="oui_demande_asile" @if ($inscrit->is_demande_asile == 1) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="oui_demande_asile">Oui</label>
                    <input type="radio" name="is_demande_asile" value="non" onclick="hideshowasile(2)" id="non_demande_asile" @if ($inscrit->is_demande_asile == 0) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_demande_asile">Non</label>
                <!--- Si oui --->
                <div id="div_asile">
                <div class="field">
                    <div class="label">Date d'arrivé en france</div>
                    <input type="date" name="dte_arrivee_fr" value="{{$inscrit->dte_arrivee_fr}}">
                </div>
                </div>
                <!--- Fin --->                    
                    <div class="label">Réfugié politique</div>
                    <input type="radio" name="is_refugie_politique" value="1" onclick="hideshowpolitique(1)" id="oui_refugie_politique" @if ($inscrit->is_refugie_politique == 1) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="oui_refugie_politique">Oui</label>
                    <input type="radio" name="is_refugie_politique" value="0" onclick="hideshowpolitique(2)" id="non_refugie_politique" @if ($inscrit->is_refugie_politique == 0) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_refugie_politique">Non</label>
                <!--- Si oui --->
                <div id="div_politique">
                    <div class="field">
                        <div class="label">Date d'arrivé en france</div>
                        <input type="date" name="dte_arrivee_fr" value="{{$inscrit->dte_arrivee_fr}}">
                    </div>
                    </div>
                    <!--- Fin ---> 
                    
                        <div class="label">Inscrit à France travail</div>
                        <input type="radio" name="is_france_travail" value="1" onclick="hideshowfrance(1)" id="oui_pole_emplois" @if ($inscrit->is_france_travail == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_pole_emplois">Oui</label>
                        <input type="radio" name="is_france_travail" value="0" onclick="hideshowfrance(2)" id="non_pole_emplois" @if ($inscrit->is_france_travail == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_pole_emplois">Non</label>
                    
                    <!--- Si oui --->
                    <div id="div_france" class="hidden">
                    <div class="field">
                        <div class="label">Date d'inscription à France travail</div>
                        <input type="date" name="france_dte_inscription" value="{{$inscrit->franceTravail->dte_inscription}}">
                    </div>
                    <div class="field">
                        <div class="label">Nom référent</div>
                        <input type="text" name="france_nom_ref" value="{{$inscrit->franceTravail->nom_ref}}">
                    </div>
                    </div>
                    <!--- Fin --->
                    
                        <div class="label">Inscrit à Soélis</div>
                        <input type="radio" name="is_soelis" value="1" onclick="hideshowsoelis(1)" id="oui_soelis" @if ($inscrit->is_soelis == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_soelis">Oui</label>
                        <input type="radio" name="is_soelis" value="0" onclick="hideshowsoelis(2)" id="non_soelis" @if ($inscrit->is_soelis == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_soelis">Non</label>
                    
                    <!--- Si oui --->
                    <div id="div_soelis" class="hidden">
                    <div class="field">
                        <div class="label">Date d'inscription à Soélis</div>
                        <input type="date" name="soelis_dte_inscription" value="{{$inscrit->soelis->dte_inscription}}">
                    </div>
                    <div class="field">
                        <div class="label">Nom référent</div>
                        <input type="text" name="soelis_nom_ref" value="{{$inscrit->soelis->nom_ref}}">
                    </div>
                    </div>
                    <!--- Fin --->
                    
                        <div class="label">Inscrit à la chambre des métiers et de l'artisanat</div>
                        <input type="radio" name="is_cma" value="1" onclick="hideshowcma(1)" id="oui_cma" @if ($inscrit->is_cma == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_cma">Oui</label>
                        <input type="radio" name="is_cma" value="0" onclick="hideshowcma(2)" id="non_cma" @if ($inscrit->is_cma == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_cma">Non</label>
                    
                    <!--- Si oui --->
                    <div id="div_cma" class="hidden">
                    <div class="field">
                        <div class="label">Date d'inscription la chambre des métiers et de l'artisanat</div>
                        <input type="date" name="cma_dte_inscription" value="{{$inscrit->cma->dte_inscription}}">
                    </div>
                    <div class="field">
                        <div class="label">Nom référent</div>
                        <input type="text" name="cma_nom_ref" value="{{$inscrit->cma->nom_ref}}">
                    </div>
                    </div>
                    <!--- Fin --->
                    
                        <div class="label">Inscrit à la Mission locale</div>
                        <input type="radio" name="is_mission_locale" value="1" onclick="hideshowmission(1)" id="oui_mission_locale" @if ($inscrit->is_mission_locale == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_mission_locale">Oui</label>
                        <input type="radio" name="is_mission_locale" value="0" onclick="hideshowmission(2)" id="non_mission_locale" @if ($inscrit->is_mission_locale == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_mission_locale">Non</label>
                    
                    <!--- Si oui --->
                    <div id="div_mission" class="hidden">
                    <div class="field">
                        <div class="label">Date d'inscription à la Mission locale</div>
                        <input type="date" name="mission_dte_inscription" value="{{$inscrit->missionLocale->dte_inscription}}">
                    </div>
                    <div class="field">
                        <div class="label">Nom référent</div>
                        <input type="text" name="mission_nom_ref" value="{{$inscrit->missionLocale->nom_ref}}">
                    </div>
                    </div>
                    <!--- Fin --->
                    
                        <div class="label">Inscrit à CAP emplois</div>
                        <input type="radio" name="is_cap_emploi" value="1" onclick="hideshowcap(1)" id="oui_cap_emploi" @if ($inscrit->is_cap_emploi == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_cap_emploi">Oui</label>
                        <input type="radio" name="is_cap_emploi" value="0" onclick="hideshowcap(2)" id="non_cap_emploi" @if ($inscrit->is_cap_emploi == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_cap_emploi">Non</label>
                    
                    <!--- Si oui --->
                    <div id="div_cap" class="hidden">
                    <div class="field">
                        <div class="label">Date d'inscription CAP emplois</div>
                        <input type="date" name="cap_dte_inscription" value="{{$inscrit->cap->dte_inscription}}">
                    </div>
                    <div class="field">
                        <div class="label">Nom référent</div>
                        <input type="text" name="cap_nom_ref" value="{{$inscrit->cap->nom_ref}}">
                    </div>
                    </div>
                    <!--- Fin --->
                    
                        <div class="label">CV disponible</div>
                        <input type="radio" name="is_cv" value="1" onclick="hideshowcv(1)" id="oui_cv" @if ($inscrit->is_cv == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_cv">Oui</label>
                        <input type="radio" name="is_cv" value="0" onclick="hideshowcv(2)" id="non_cv" @if ($inscrit->is_cv == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_cv">Non</label>
                    
                    <!--- Si oui --->
                    <div id="div_cv_oui">
                    <div class="field">
                        <div class="label">Insérer le cv scanné (format PDF uniquement)</div>
                        <input type="file" name="cv_nom">
                    </div>
                    </div>
                    <!--- Si non --->
                    <div id="div_cv_non">
                    <div class="field">
                        <div class="label">Date programmé pour travailler le CV (laisser vide si pas de date)</div>
                        <input type="date" name="dte_travailler">
                    </div>
                    </div>
                    <!--- Fin --->
                    
                        <div class="label">A le Permis</div>
                        <input type="radio" name="is_permis" value="1" onclick="hideshowpermis(1)" id="oui_permis" @if ($inscrit->is_permis == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_permis">Oui</label>
                        <input type="radio" name="is_permis" value="0" onclick="hideshowpermis(2)" id="non_permis" @if ($inscrit->is_permis == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_permis">Non</label>
                    
                    <!--- Si oui --->
                    <div id="div_permis" class="hidden">
                    <div class="field">
                        <div class="label">Combien de permis</div>
                        <input type="number" name="nb_permis" value="{{$inscrit->nb_permis}}">
                    </div>
                    <!--- Si oui un/plusieurs --->
                    <div class="field">
                    <div class="label">Permis</div>
                    <select name="type" onchange="hideshowpermischoix()" id="choix_permis">
                        <option value="aucun">Choisir un permis</option>
                        <option value="aucun">aucun</option>
                        <option value="autos">Permis autos</option>
                        <option value="motos">Permis motos</option>
                        <option value="marchandises">Permis marchandises ou de personnes</option>
                    </select>
                    </div>
                    </div>
                    <!--- Si non (rien) --->
                    <!--- Si autos --->
                    <div id="autos" class="hidden">
                    <div class="field">
                    <div class="label">Permis autos</div>
                    <select name="autos_categorie">
                        <option value="aucun">Choisir une catégorie</option>
                        <option value="B">B</option>
                        <option value="B1">B1</option>
                        <option value="BE">BE</option>
                    </select>
                    </div>
                    </div>
                    <!--- Si motos --->
                    <div id="motos" class="hidden">
                    <div class="field">
                    <div class="label">Permis motos</div>
                    <select name="motos_categorie">
                        <option value="aucun">Choisir une catégorie</option>
                        <option value="B">A</option>
                        <option value="B1">A1</option>
                        <option value="BE">A2</option>
                    </select>
                    </div>
                    </div>
                    <!--- Si marchandises ou personnes --->
                    <div id="marchandises" class="hidden">
                    <div class="field">
                    <div class="label">Permis marchandises ou de personnes</div>
                    <select name="marchandises_categorie">
                        <option value="aucun">Choisir une catégorie</option>
                        <option value="C">C</option>
                        <option value="CE">CE</option>
                        <option value="C1">C1</option>
                        <option value="C1E">C1E</option>
                        <option value="D">D</option>
                        <option value="DE">DE</option>
                        <option value="D1">D1</option>
                        <option value="D1E">D1E</option>
                    </select>
                    </div>
                    </div>
                    <!--- Autres permis --->
                <div class="field hidden" id="autre_permis">
                    <div class="label">Autres permis</div>
                    <input type="text" name="autre_permis">
                </div>
                    <!--- Fin --->
                    
                        <div class="label">Véhicule disponible</div>
                        <input type="radio" name="vehicule_dispo" value="1" onclick="hideshowvehiculedispo(1)" id="oui_vehicule" @if ($inscrit->vehicule_dispo == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_vehicule">Oui</label>
                        <input type="radio" name="vehicule_dispo" value="0" onclick="hideshowvehiculedispo(2)" id="non_vehicule" @if ($inscrit->vehicule_dispo == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_vehicule">Non</label>
                    
                    <!--- Si oui (rien) --->
                    <!--- Si non --->
                    <div id="div_vehicule_dispo" class="hidden">
                        <div class="label">Achat prévu d'un véhicule</div>
                        <input type="radio" name="prevu_vehicule" value="1" onclick="hideshowvehiculeprevu(1)" id="oui_achat" @if ($inscrit->prevu_vehicule == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_achat">Oui</label>
                        <input type="radio" name="prevu_vehicule" value="0" onclick="hideshowvehiculeprevu(2)" id="non_achat" @if ($inscrit->prevu_vehicule == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_achat">Non</label>
                    </div>
                    <!--- Si oui --->
                    <div id="div_vehicule_prevu" class="hidden">
                    <div class="field">
                        <div class="label">Date d'achat prévue</div>
                        <input type="date" name="dte_achat" value="{{$inscrit->dte_achat}}">
                    </div>
                    </div>
                    <!--- Si non (rien) --->
                    <div class="field btns">
                        <a class="prev-2 prev">Précédent</a>
                        <a class="next-2 next">Suivant</a>
                    </div>
                </div>
                <!---  Page 4 : FORMATION  --->
            <div class="page 4" id="page4">
                    <div class="title">Formations :</div>
                    <div class="field">
                    <div class="label">Diplôme(s) obtenus</div>
                    <input type="number" name="nb_diplome" class="nb_diplome">
                    </div>
                    <div id="diplomes_container" class="field2">
                    </div>
                    <div id="responses_container"></div>
                    <div id="other_fields_container"></div>
                    <script>
                                        // Écouter les changements dans le nombre de diplômes obtenus
                    document.querySelector('input[name="nb_diplome"]').addEventListener('change', function () {
                        var nbDiplomes = parseInt(this.value, 10);
                        var otherFieldsContainer = document.getElementById("other_fields_container");
    
                        // Réinitialiser les champs à chaque changement du nombre de diplômes
                        otherFieldsContainer.innerHTML = '';
    
                        // Afficher les champs de texte pour nb_annee et type lorsque nb_diplome atteint 0
                        if (nbDiplomes === 0) {
                            // Champ de texte pour le nombre d'années d'étude
                            createTextField(otherFieldsContainer, 'Nombre d\'années d\'étude', 'nb_annee');
    
                            // Champ de texte pour le niveau
                            createTextField(otherFieldsContainer, 'Renseigner le niveau', 'type');
                        }
                    });
    
                    // Fonction pour créer un champ de texte
                    function createTextField(container, label, name) {
                        var fieldDiv = document.createElement('div');
                        fieldDiv.className = 'field';
    
                        var labelDiv = document.createElement('div');
                        labelDiv.className = 'label';
                        labelDiv.innerHTML = label;
                        fieldDiv.appendChild(labelDiv);
    
                        var input = document.createElement('input');
                        input.type = 'text';
                        input.name = name;
                        fieldDiv.appendChild(input);
    
                        container.appendChild(fieldDiv);
                    }
    
                    </script>
                    <script>// Écouter les changements dans le nombre de diplômes obtenus
                        document.querySelector('.nb_diplome').addEventListener('change', function () {
                            var nbDiplomes = parseInt(this.value, 10);
                            var diplomesContainer = document.getElementById("diplomes_container");
                        
                            // Réinitialiser les champs à chaque changement du nombre de diplômes
                            diplomesContainer.innerHTML = '';
                        
                            // Créer les champs "Type de diplôme" en fonction du nombre de diplômes
                            for (var i = 0; i < nbDiplomes; i++) {
                                var newDiplomeDiv = document.createElement('div');
                                newDiplomeDiv.className = 'diplome';
                        
                                var label = document.createElement('div');
                                label.className = 'label';
                                label.innerHTML = 'Type de Diplôme ' + (i + 1);
                                newDiplomeDiv.appendChild(label);
                        
                                var select = document.createElement('select');
                                select.name = 'nom_diplome_' + i;
                                select.id = 'diplome_' + i;
                                
                                // Ajouter les options au select
                                var options = ["Choisir un diplôme", "Brevet", "CAP", "BEP", "BAC", "BAC+2", "Licence", "Master 1", "Master 2", "Autre", "Formation continue"];
                                for (var j = 0; j < options.length; j++) {
                                    var option = document.createElement('option');
                                    option.value = options[j].toLowerCase();
                                    option.text = options[j];
                                    select.appendChild(option);
                                }
                        
                                newDiplomeDiv.appendChild(select);
                                diplomesContainer.appendChild(newDiplomeDiv);
                            }
                        });
                        </script>
    
                        
    
                        <script>// Fonction pour créer les champs de réponse en fonction du type de diplôme sélectionné
                            function createResponseFields(diplomeIndex, selectedDiplome) {
                                var responseContainer = document.getElementById("responses_container_" + diplomeIndex);
                                
                                // Supprimer les champs existants
                                responseContainer.innerHTML = '';
                            
                                // Créer les champs en fonction du type de diplôme
                                switch (selectedDiplome) {
                                    case 'cap':
                                        createTextField(responseContainer, 'Renseigner le type de métier', 'niveau_cap_' + diplomeIndex);
                                        break;
                                    case 'bep':
                                        createTextField(responseContainer, 'Renseigner la spécialité', 'niveau_bep_' + diplomeIndex);
                                        break;
                                    case 'bac':
                                    case 'bac+2':
                                    case 'licence':
                                    case 'master 1':
                                    case 'master 2':
                                        createTextField(responseContainer, 'Renseigner la spécialité', 'niveau_' + selectedDiplome + '_' + diplomeIndex);
                                        break;
                                    case 'formation continue':
                                        createTextField(responseContainer, 'Renseigner la formation', 'niveau_formation_continue_' + diplomeIndex);
                                        break;
                                    case 'autre':
                                        createTextField(responseContainer, 'Renseigner le diplôme', 'niveau_autre_' + diplomeIndex);
                                        break;
                                    default:
                                        // Aucune action pour les autres cas
                                        break;
                                }
                            }
                            
                            // Fonction pour créer un champ de texte
                            function createTextField(container, label, name) {
                                var fieldDiv = document.createElement('div');
                                fieldDiv.className = 'field';
                            
                                var labelDiv = document.createElement('div');
                                labelDiv.className = 'label';
                                labelDiv.innerHTML = label;
                                fieldDiv.appendChild(labelDiv);
                            
                                var input = document.createElement('input');
                                input.type = 'text';
                                input.name = name;
                                fieldDiv.appendChild(input);
                            
                                container.appendChild(fieldDiv);
                            }
                            
                            // Écouter les changements dans le nombre de diplômes obtenus
                            document.querySelector('input[name="nb_diplome"]').addEventListener('change', function () {
                                var nbDiplomes = parseInt(this.value, 10);
                                var diplomesContainer = document.getElementById("diplomes_container");
                            
                                // Réinitialiser les champs à chaque changement du nombre de diplômes
                                diplomesContainer.innerHTML = '';
                            
                                // Créer les champs "Type de diplôme" en fonction du nombre de diplômes
                                for (var i = 0; i < nbDiplomes; i++) {
                                    var newDiplomeDiv = document.createElement('div');
                                    newDiplomeDiv.className = 'diplome';
                            
                                    var label = document.createElement('div');
                                    label.className = 'label';
                                    label.innerHTML = 'Diplôme ' + (i + 1);
                                    newDiplomeDiv.appendChild(label);
                            
                                    var select = document.createElement('select');
                                    select.name = 'nom_diplome_' + i;
                                    select.id = 'diplome_' + i;
                            
                                    // Ajouter les options au select
                                    var options = ["Choisir un diplôme", "Brevet", "CAP", "BEP", "BAC", "BAC+2", "Licence", "Master 1", "Master 2", "Autre", "Formation continue"];
                                    for (var j = 0; j < options.length; j++) {
                                        var option = document.createElement('option');
                                        option.value = options[j].toLowerCase();
                                        option.text = options[j];
                                        select.appendChild(option);
                                    }
                            
                                    newDiplomeDiv.appendChild(select);
                            
                                    // Créer le conteneur pour les réponses
                                    var responseContainer = document.createElement('div');
                                    responseContainer.id = 'responses_container_' + i;
                                    newDiplomeDiv.appendChild(responseContainer);
                            
                                    diplomesContainer.appendChild(newDiplomeDiv);
                            
                                    // Ajouter un écouteur d'événements sur le changement de type de diplôme
                                    select.addEventListener('change', function () {
                                        var diplomeIndex = parseInt(this.id.split('_')[1], 10);
                                        var selectedDiplome = this.value;
                                        createResponseFields(diplomeIndex, selectedDiplome);
                                    });
                                }
                            });
                            
                            </script>
                    <!--- Si Formation continue --->
                        <div class="label">Reconversion professionnelle</div>
                        <input type="radio" name="is_reconv_pro" value="1" onclick="hideshowreconv(1)" id="oui_reconv" @if ($inscrit->is_reconv_pro == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_reconv">Oui</label>
                        <input type="radio" name="is_reconv_pro" value="0" onclick="hideshowreconv(2)" id="non_reconv" @if ($inscrit->is_reconv_pro == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_reconv">Non</label>
                    <!--- Si non (rien) --->
                    <!--- Si oui --->
                    <div id="div_reconv" class="hidden">
                    <div class="label">Formations prévues</div>
                    <input type="radio" name="is_form_prevue" value="1" onclick="hideshowformprevu(1)" id="oui_prevue" @if ($inscrit->reconvPro->is_form_prevue == 1) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="oui_prevue">Oui</label>
                    <input type="radio" name="is_form_prevue" value="0" onclick="hideshowformprevu(2)" id="non_prevue" @if ($inscrit->reconvPro->is_form_prevue == 0) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_prevue">Non</label>
                    </div>
                    <!--- Si non (rien) --->
                    <!--- Si oui --->
                    <div id="div_form_prevu">
                    <div class="field">
                        <div class="label">Renseigner le nom : </div>
                        <input type="text" name="reconv_nom" value="{{$inscrit->reconvPro->nom}}">
                    </div>
                    <div class="field">
                        <div class="label">Renseigner la date : </div>
                        <input type="date" name="reconv_date" value="{{$inscrit->reconvPro->date}}">
                    </div>
                    <div class="field">
                        <div class="label">Renseigner la durée : </div>
                        <input type="text" name="reconv_duree" value="{{$inscrit->reconvPro->duree}}">
                    </div>
                    </div>
                   <!--- Fin --->
                    <div class="label">Reprise d'étude</div>
                    <input type="radio" name="is_reprise_etudes" value="1" onclick="hideshowreprise(1)" id="oui_reprise" @if ($inscrit->is_reprise_etudes == 1) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="oui_reprise">Oui</label>
                    <input type="radio" name="is_reprise_etudes" value="0" onclick="hideshowreprise(2)" id="non_reprise" @if ($inscrit->is_reprise_etudes == 0) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_reprise">Non</label>
                    <!--- Si non (rien) --->
                    <!--- Si oui --->
                    <div id="div_reprise" class="hidden">
                    <div class="field">
                        <div class="label">Diplôme préparé</div>
                        <input type="text" name="nom_diplome_reprise" value="{{$inscrit->repriseEtudes->nom_diplome}}">
                    </div>
                    </div>
                    <!--- Si fin --->
                    <div class="label">La personne va-t-elle bénéficier d'une formation professionnelle</div>
                    <input type="radio" name="is_formation_pro" value="1" onclick="hideshowformpro(1)" id="oui_form_pro" @if ($inscrit->is_formation_pro == 1) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="oui_form_pro">Oui</label>formation_pro
                    <input type="radio" name="is_formation_pro" value="0" onclick="hideshowformpro(2)" id="non_form_pro" @if ($inscrit->is_formation_pro == 0) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_form_pro">Non</label>
                    <!--- Si oui --->
                    <div id="div_form_pro" class="hidden">
                    <div class="field">
                        <div class="label">Type de formation</div>
                        <select name="type_formation_pro" onchange="hideshowtypeform()" id="type_form">
                            <option value="aucun" @if ($inscrit->formationPro->type == "aucun") @selected(true) @endif>Choisir un type de formation</option>
                            <option value="qualifiante" @if ($inscrit->formationPro->type == "qualifiante") @selected(true) @endif>Qualifiante</option>
                            <option value="diplomante" @if ($inscrit->formationPro->type == "diplomante") @selected(true) @endif>Diplômante</option>
                        </select>
                    </div>
                    </div>
                    <!--- Si diplomante --->
                    <div id="diplomante">
                    <div class="field">
                        <div class="label">Nom de la formation diplômante</div>
                        <input type="text" name="diplome_formation_pro" value="{{$inscrit->formationPro->nom}}">
                    </div>
                    </div>
                    <!--- Si qualifiante --->
                    <div id="qualifiante">
                    <div class="field">
                        <div class="label">Nom de la formation qualifiante</div>
                        <input type="text" name="qualifiante_formation_pro" value="{{$inscrit->formationPro->nom}}">
                    </div>
                    </div>
                    <!--- Fin --->
                    <div class="field">
                        <div class="label">Métier souhaité</div>
                        <input type="text" name="nom_metier" value="{{$inscrit->metierSouhaites->nom}}">
                    </div>
                    <div class="field">
                        <div class="label">Secteur d'activité</div>
                        <input type="text" name="secteur_act" value="{{$inscrit->metierSouhaites->secteur_act}}">
                    </div>
                    <div class="field">
                        <div class="label">Secteur géographique</div>
                        <input type="text" name="secteur_geo" value="{{$inscrit->metierSouhaites->secteur_geo}}">
                    </div>
                    <div class="label">Connaissance en bureautique ou logiciels</div>
                    <input type="radio" name="is_logiciel" value="1" onclick="hideshowlogiciel(1)" id="oui_logiciel">
                    <label class="label" for="oui_logiciel">Oui</label>
                    <input type="radio" name="is_logiciel" value="0" onclick="hideshowlogiciel(2)" id="non_logiciel"checked>
                    <label class="label" for="non_logiciel">Non</label>
                    <div id="div_logiciel">
                        <div class="field">
                            <div class="label">Préciser</div>
                            <input type="text" name="logiciel">
                        </div>
                    </div>
                    <div class="label">Horaire de travail souhaité</div>
                    <input type="checkbox" name="nb_horaire" value="Travail de nuit" id="nuit" @if ($inscrit->horaire->type == "Travail de nuit") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="nuit">Travail de nuit</label>
                    <input type="checkbox" name="nb_horaire" value="Travail la journee" id="journee" @if ($inscrit->horaire->type == "Travail la journee") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="journee">Travail la journée</label>
                    <input type="checkbox" name="nb_horaire" value="Travail le matin" id="matin" @if ($inscrit->horaire->type == "Travail le matin") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="matin">Travail le matin</label>
                    <input type="checkbox" name="nb_horaire" value="Travail en cyble 2x8" id="2x8" @if ($inscrit->horaire->type == "Travail en cyble 2x8") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="2x8">Travail en cycle 2x8</label>
                    <input type="checkbox" name="nb_horaire" value="Travail en cycle 3x8" id="3x8" @if ($inscrit->horaire->type == "Travail en cycle 3x8") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="3x8">Travail en cycle 3x8</label>
                    <input type="checkbox" name="nb_horaire" value="Travail en cycle 5x8" id="5x8" @if ($inscrit->horaire->type == "Travail en cycle 5x8") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="5x8">Travail en cycle 5x8</label>
                    <input type="checkbox" name="nb_horaire" value="Travail en VSD" id="VSD" @if ($inscrit->horaire->type == "Travail en VSD") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="VSD">Travail en VSD</label>
                    <input type="checkbox" name="nb_horaire" value="Travail en SD" id="SD" @if ($inscrit->horaire->type == "Travail en SD") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="journee">Travail en SD</label>
    
                    <div class="field btns">
                        <a class="prev-3 prev">Précédent</a>
                        <a class="next-3 next">Suivant</a>
                    </div>
            </div>
                <!---  Page 5 : LANGUES  --->
                <div class="page 5" id="page5">
                    <div class="title">Langues</div>
                    <div class="label">Inscrit aux ateliers de français</div>
                    <input type="radio" name="is_atelier" value="1" id="oui_fr" @if ($inscrit->langues->is_atelier == "1") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="oui_fr">Oui</label>
                    <input type="radio" name="is_atelier" value="0" id="non_fr" @if ($inscrit->langues->is_atelier == "0") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_fr">Non</label>
                    <div class="field">
                        <div class="label">Connaissance en français écrit</div>
                        <select name="fr_ecrit">
                           <option value="aucun" @if ($inscrit->langues->fr_ecrit == "aucun") @selected(true) @endif>Choisir un niveau</option>
                           <option value="A1" @if ($inscrit->langues->fr_ecrit == "A1") @selected(true) @endif>A1</option>
                           <option value="A2" @if ($inscrit->langues->fr_ecrit == "A2") @selected(true) @endif>A2</option>
                           <option value="B1" @if ($inscrit->langues->fr_ecrit == "B1") @selected(true) @endif>B1</option>
                           <option value="B2" @if ($inscrit->langues->fr_ecrit == "B2") @selected(true) @endif>B2</option>
                           <option value="C1" @if ($inscrit->langues->fr_ecrit == "C1") @selected(true) @endif>C1</option>
                           <option value="C2" @if ($inscrit->langues->fr_ecrit == "C2") @selected(true) @endif>C2</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Connaissance en français parlé</div>
                        <select name="fr_parle">
                           <option value="aucun" @if ($inscrit->langues->fr_parler == "aucun") @selected(true) @endif>Choisir un niveau</option>
                           <option value="A1" @if ($inscrit->langues->fr_parle == "A1") @selected(true) @endif>A1</option>
                           <option value="A2" @if ($inscrit->langues->fr_parle == "A2") @selected(true) @endif>A2</option>
                           <option value="B1" @if ($inscrit->langues->fr_parle == "B1") @selected(true) @endif>B1</option>
                           <option value="B2" @if ($inscrit->langues->fr_parle == "B2") @selected(true) @endif>B2</option>
                           <option value="C1" @if ($inscrit->langues->fr_parle == "C1") @selected(true) @endif>C1</option>
                           <option value="C2" @if ($inscrit->langues->fr_parle == "C2") @selected(true) @endif>C2</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Connaissance en français lu</div>
                        <select name="fr_lu">
                           <option value="aucun" @if ($inscrit->langues->fr_lu == "aucun") @selected(true) @endif>Choisir un niveau</option>
                           <option value="A1" @if ($inscrit->langues->fr_lu == "A1") @selected(true) @endif>A1</option>
                           <option value="A2" @if ($inscrit->langues->fr_lu == "A2") @selected(true) @endif>A2</option>
                           <option value="B1" @if ($inscrit->langues->fr_lu == "B1") @selected(true) @endif>B1</option>
                           <option value="B2" @if ($inscrit->langues->fr_lu == "B2") @selected(true) @endif>B2</option>
                           <option value="C1" @if ($inscrit->langues->fr_lu == "C1") @selected(true) @endif>C1</option>
                           <option value="C2" @if ($inscrit->langues->fr_lu == "C2") @selected(true) @endif>C2</option>
                        </select>
                    </div>
                    <div class="title">Anglais</div>
                    <div class="field">
                        <div class="label">Connaissance en anglais écrit</div>
                        <select name="en_ecrit">
                           <option value="aucun" @if ($inscrit->langues->en_ecrit == "aucun") @selected(true) @endif>Choisir un niveau</option>
                           <option value="A1" @if ($inscrit->langues->en_ecrit == "A1") @selected(true) @endif>A1</option>
                           <option value="A2" @if ($inscrit->langues->en_ecrit == "A2") @selected(true) @endif>A2</option>
                           <option value="B1" @if ($inscrit->langues->en_ecrit == "B1") @selected(true) @endif>B1</option>
                           <option value="B2" @if ($inscrit->langues->en_ecrit == "B2") @selected(true) @endif>B2</option>
                           <option value="C1" @if ($inscrit->langues->en_ecrit == "C1") @selected(true) @endif>C1</option>
                           <option value="C2" @if ($inscrit->langues->en_ecrit == "C2") @selected(true) @endif>C2</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Connaissance en anglais parlé</div>
                        <select name="en_parle">
                           <option value="aucun" @if ($inscrit->langues->en_parle == "aucun") @selected(true) @endif>Choisir un niveau</option>
                           <option value="A1" @if ($inscrit->langues->en_parle == "A1") @selected(true) @endif>A1</option>
                           <option value="A2" @if ($inscrit->langues->en_parle == "A2") @selected(true) @endif>A2</option>
                           <option value="B1" @if ($inscrit->langues->en_parle == "B1") @selected(true) @endif>B1</option>
                           <option value="B2" @if ($inscrit->langues->en_parle == "B2") @selected(true) @endif>B2</option>
                           <option value="C1" @if ($inscrit->langues->en_parle == "C1") @selected(true) @endif>C1</option>
                           <option value="C2" @if ($inscrit->langues->en_parle == "C2") @selected(true) @endif>C2</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Connaissance en anglais lu</div>
                        <select name="en_lu">
                           <option value="aucun" @if ($inscrit->langues->en_lu == "aucun") @selected(true) @endif>Choisir un niveau</option>
                           <option value="A1" @if ($inscrit->langues->en_lu == "A1") @selected(true) @endif>A1</option>
                           <option value="A2" @if ($inscrit->langues->en_lu == "A2") @selected(true) @endif>A2</option>
                           <option value="B1" @if ($inscrit->langues->en_lu == "B1") @selected(true) @endif>B1</option>
                           <option value="B2" @if ($inscrit->langues->en_lu == "B2") @selected(true) @endif>B2</option>
                           <option value="C1" @if ($inscrit->langues->en_lu == "C1") @selected(true) @endif>C1</option>
                           <option value="C2" @if ($inscrit->langues->en_lu == "C2") @selected(true) @endif>C2</option>
                        </select>
                    </div>
                    <div class="label">Autre(s) langue(s) parlée(s)</div>
                    <input type="radio" name="is_autre" value="1" onclick="hideshowlangue(1)" id="oui_autre" @if ($inscrit->langues->is_autre == "1") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="oui_autre">Oui</label>
                    <input type="radio" name="is_autre" value="0" onclick="hideshowlangue(2)" id="non_autre" @if ($inscrit->langues->is_autre == "0") @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_autre">Non</label>
                    <!--- Si oui --->
                    <div id="div_langue" class="hidden">
                    <div class="field">
                        <div class="label">Langue(s)</div>
                        <input type="text" name="autre_langue" value="{{$inscrit->langues->autre}}">
                    </div>
                    </div>
                    <!--- Fin --->
                    <div class="field btns">
                        <a class="prev-4 prev">Précédent</a>
                        <a class="next-4 next">Suivant</a>
                    </div>
                </div>
                <!---  Page 6 : INFORMATIONS COMPLEMENTAIRES  --->
                <div class="page 6" id="page6">
                    <div class="title">Informations complémentaires</div>
                    <div class="field">
                        <div class="label">Notes</div>
                        <textarea type="text" name="infos_comp" value="{{$inscrit->infos_comp}}"></textarea>
                    </div>
                    <br>
                    <div class="field btns">
                        <a class="prev-5 prev">Précédent</a>
                        <button class="submit next">Confirmer</button>
    
                    </div>
                </div>
        </form>
    </div>
    </div>
    </div>
    <script>
        const slidePage = document.querySelector('.slidepage');
        const firstNextBtn = document.querySelector('.nextBtn');
        const prevBtnSec = document.querySelector('.prev-1');
        const nextBtnSec = document.querySelector('.next-1');
        const prevBtnThird = document.querySelector('.prev-2');
        const nextBtnThird = document.querySelector('.next-2');
        const prevBtnFourth = document.querySelector('.prev-3');
        const nextBtnFourth = document.querySelector('.next-3');
        const prevBtnFive = document.querySelector('.prev-4');
        const nextBtnFive = document.querySelector('.next-4');
        const prevBtnSix = document.querySelector('.prev-5');
        const submitBtn = document.querySelector('.submit');
        const progressText = document.querySelectorAll('.step p');
        const progressCheck = document.querySelectorAll('.step .check');
        const bullet = document.querySelectorAll('.step .bullet');
        let max = 6;
        let current = 1;
        
        firstNextBtn.addEventListener("click", function() {
            slidePage.style.marginLeft = "-25%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            current +=1;
            document.getElementById('page2').style.display = 'block';
        });
        nextBtnSec.addEventListener("click", function() {
            slidePage.style.marginLeft = "-50%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            current +=1;
            document.getElementById('page3').style.display = 'block';
        });
        nextBtnThird.addEventListener("click", function() {
            slidePage.style.marginLeft = "-75%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            current +=1;
            document.getElementById('page4').style.display = 'block';
        });
        nextBtnFourth.addEventListener("click", function() {
            slidePage.style.marginLeft = "-100%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            current +=1;
            document.getElementById('page5').style.display = 'block';
        });
        nextBtnFive.addEventListener("click", function() {
            slidePage.style.marginLeft = "-125%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            current +=1;
            document.getElementById('page6').style.display = 'block';
        });
    
        prevBtnSec.addEventListener("click", function() {
            slidePage.style.marginLeft = "0%";
            bullet[current - 1].classList.remove("active");
            progressCheck[current - 1].classList.remove("active");
            current -=1;
            document.getElementById('page2').style.display = 'none';
        });
        prevBtnThird.addEventListener("click", function() {
            slidePage.style.marginLeft = "-25%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            current -=1;
            document.getElementById('page3').style.display = 'none';
        });
        prevBtnFourth.addEventListener("click", function() {
            slidePage.style.marginLeft = "-50%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            current -=1;
            document.getElementById('page4').style.display = 'none';
        });
        prevBtnFive.addEventListener("click", function() {
            slidePage.style.marginLeft = "-75%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            current -=1;
            document.getElementById('page5').style.display = 'none';
        });
        prevBtnSix.addEventListener("click", function() {
            slidePage.style.marginLeft = "-100%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            current -=1;
            document.getElementById('page6').style.display = 'none';
        });
                    </script>
    @endsection