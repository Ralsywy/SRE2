@extends('base')


@section('content')
<div class="body hidden">
<div class="container">
    <Header>Modification d'un suivi</Header>
    <header>{{$inscrit->prenom}} {{$inscrit->nom}}</header>
    <div class="div_warn">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Attention !</strong> Si une information ne s'affiche pas correctement appuyer sur le bouton (oui/non) correspondant
    </div>
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
    <form method="POST" action="{{ route('modifier-store',[$inscrit->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <!---  Page 1 : INFORMATIONS PERSONNELLES  --->
        <div class="page 1 slidepage" id="page1">
            <div class="title hidden">Informations personnelles :</div>
            <div class="field">
                <div class="label">Date de contact</div>
                <input type="date" name="dte_contact" value="{{$inscrit->dte_contact}}">
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
                <input type="text" name="numero" value="{{$inscrit->rdc?->numero}}">
            </div>
            <div class="field">
                <div class="label">Centre</div>
                <input type="text" name="centre" value="{{$inscrit->rdc?->centre}}">
            </div>
            <div class="field">
                <div class="label">Jour</div>
                <input type="text" name="jour" value="{{$inscrit->rdc?->jour}}">
            </div>
            </div>
            <!--- Fin --->
            <hr class="dashed">
                <div class="label">Bénévole aux restos du coeur</div>
                <input type="radio" name="is_benevole" value="1" id="oui_benevole" @if ($inscrit->is_benevole == 1) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_benevole">Oui</label>
                <input type="radio" name="is_benevole" value="0" id="non_benevole" @if ($inscrit->is_benevole == 0) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_benevole">Non</label>
            
            <div class="field">
                <div class="label">Accompagnateur SRE</div>
                <select name="user_id">
                    <option value="1">Choisir un accompagnateur</option>
                    @foreach($users as $ligne)
                    @if($ligne->id!=1)
                    <option value={{$ligne->id}} @if($inscrit->user_id==$ligne->id)
                        selected
                        @endif
                        >{{$ligne->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="field nextBtn">
                <a onclick="redirigerVersHaut()">Suivant</a>
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
                    <div class="label">Nationalité | ({{$inscrit->nationalite}})</div>
                    <div class="label">Nationalité</div>
                    <select name="nationalite">
                        <div class="label"></div>
                        <option value="Aucune">Choisir une nationalité</option>
                        <option value="{{$inscrit->nationalite}}" selected>{{$inscrit->nationalite}}</option>
                        @include('pays')
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
                    <select name="situation_perso">
                        <option value="Aucune" @if ($inscrit->situation_perso == "Aucune") @selected(true) @endif>Choisir une situation personnel</option>
                        <option value="celibataire" @if ($inscrit->situation_perso == "celibataire") @selected(true) @endif>Célibataire</option>
                        <option value="marie" @if ($inscrit->situation_perso == "marie") @selected(true) @endif>Marié(e)</option>
                        <option value="divorce" @if ($inscrit->situation_perso == "divorce") @selected(true) @endif>Divorcé(e)</option>
                        <option value="veuf" @if ($inscrit->situation_perso == "veuf") @selected(true) @endif>Veuf(ve)</option>
                        <option value="pacse" @if ($inscrit->situation_perso == "pacse") @selected(true) @endif>Pacsé(e)</option>
                    </select>
                </div>
                <div class="field btns">
                    <a class="prev-1 prev" onclick="redirigerVersHaut()">Précédent</a>
                    <a class="next-1 next" onclick="redirigerVersHaut()">Suivant</a>
                </div>
            </div>
            <!---  Page 3 : SITUATION PERSONNELLE  --->
            <div class="page 3" id="page3">
                <div class="title">Situation personnelle :</div>
                
                    <div class="label">Enfant à charge</div>
                    <input type="radio" name="is_enfant" value="1" onclick="hideshowenfant(1)" id="oui_enfant" @if ($inscrit->is_enfant == 1) @checked(true) @else @checked(false) @endif >
                    <label class="label" for="oui_enfant">Oui</label>
                    <input type="radio" name="is_enfant" value="0" onclick="hideshowenfant(2)" id="non_enfant" @if ($inscrit->is_enfant == 0) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_enfant">Non</label>

                <!--- Si oui --->
                <!--- Si oui --->
                <div id="div_enfant" class="btn-enfant hidden">
                    <div class="div_warn">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Si vous souhaitez supprimer un enfant déjà existant, il faut laisser la case de son prénom vide
                    </div>
                    <p></p>
                    <a href="#" id="genererEnfant" class="genererEnfant"><i class="fa-solid fa-plus"></i></a>
                    <a href="#" id="supprimerEnfant" class="supprimerEnfant"><i class="fa-solid fa-minus"></i></a>
                    <p></p>
                    <input type="text" id="inputnb_enfant" name="nb_enfant" value="{{$inscrit->enfants->count()}}" readonly>
                <hr class="dashed">
                <!--- Pour chaque enfant --->
                <div id="inputContainer" class="field3">
                    @php
                    $i=1
                    @endphp
                    @foreach($inscrit->enfants as $enfant)
                        <label>Nom de l'enfant {{$i}}</label>
                        <input type="text" value="{{$enfant->nom}}" name="nom_enfant{{$i}}">
                        <label>Date de naissance de l'enfant {{$i}}</label>
                        <input type="date" value="{{$enfant->dte_naissance}}" name="dte_naissance_enfant{{$i}}">
                        @php
                        $i=$i+1
                        @endphp
                    @endforeach
                </div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var nb_enfant = parseInt(document.getElementById("inputnb_enfant").value); // Compteur pour suivre le nombre de clics
                    var inputContainer = document.getElementById("inputContainer");

                    document.getElementById("genererEnfant").addEventListener("click", function(event) {
                        event.preventDefault();
                        generateInputs();
                    });

                    document.getElementById("supprimerEnfant").addEventListener("click", function(event) {
                        event.preventDefault();
                        deleteEnfant();
                    });
                
                    function generateInputs() {
                        nb_enfant += 1; // Incrémente le compteur
                        // Créez un label et un input pour chaque champ
                        var labelNom = document.createElement("label");
                        var inputNom = document.createElement("input");
                
                        var labelDate = document.createElement("label");
                        var inputDate = document.createElement("input");

                        var divEnfant = document.createElement("div");
                        var hr = document.createElement("hr");
                
                        // Affectez des attributs et des valeurs aux labels
                        labelNom.textContent = "Nom Prénom de l'enfant " + nb_enfant + " : ";
                        labelNom.setAttribute("for", "nom_enfant" + nb_enfant);
                
                        labelDate.textContent = "Date de naissance de l'enfant " + nb_enfant + " : ";
                        labelDate.setAttribute("for", "dte_naissance_enfant" + nb_enfant);
                
                        // Affectez des attributs et des valeurs aux inputs
                        inputNom.setAttribute("type", "text");
                        inputNom.setAttribute("name", "nom_enfant" + nb_enfant);
                
                        inputDate.setAttribute("type", "date");
                        inputDate.setAttribute("name", "dte_naissance_enfant" + nb_enfant);

                        divEnfant.setAttribute("name", "div_enfant"+ nb_enfant);
                        divEnfant.setAttribute("id", "div_enfant"+ nb_enfant);
                
                        // Ajoutez les labels et les inputs au conteneur
                        divEnfant.appendChild(labelNom);
                        divEnfant.appendChild(inputNom);
                
                        divEnfant.appendChild(labelDate);
                        divEnfant.appendChild(inputDate);

                        // Créez une ligne horizontale avec la classe "dashed"
                        hr.setAttribute("class", "dashed");
                        divEnfant.appendChild(hr);

                        inputContainer.appendChild(divEnfant);
                        inputnb_enfant.value = nb_enfant;
                    }
                    function deleteEnfant(){
                        // Récupérer la div à supprimer par son nom
                        var divEnfant = document.getElementById("div_enfant"+ nb_enfant);
                        // Supprimer la div
                        divEnfant.remove();
                        nb_enfant -= 1; // Incrémente le compteur pour les prochains clics
                        inputnb_enfant.value = nb_enfant;
                    }
                });
                </script>
            <!--- Fin --->
                <div class="field hidden">
                    <div class="label">Nature des revenus</div>
                    <select name="nature_revenus" onchange="hideshowrevenus()" id="revenus">
                        <option value="Aucun" @if ($inscrit->nature_revenus == "Aucun") @selected(true) @endif>Choisir un revenu</option>
                        <option value="Salaire" @if ($inscrit->nature_revenus == "Salaire") @selected(true) @endif>Salaire</option>
                        <option value="RSA" @if ($inscrit->nature_revenus == "RSA") @selected(true) @endif>RSA</option>
                        <option value="ARE" @if ($inscrit->nature_revenus == "ARE") @selected(true) @endif>ARE</option>
                        <option value="AAH" @if ($inscrit->nature_revenus == "AAH") @selected(true) @endif>AAH</option>
                        <option value="Pension de retraite" @if ($inscrit->nature_revenus == "Pension de retraite") @selected(true) @endif>Pension de retraite</option>
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
                <input type="radio" name="is_demande_asile" value="1" onclick="hideshowasile()" id="oui_demande_asile" @if ($inscrit->is_demande_asile == 1) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_demande_asile">Oui</label>
                <input type="radio" name="is_demande_asile" value="0" onclick="hideshowasile()" id="non_demande_asile" @if ($inscrit->is_demande_asile == 0) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_demande_asile">Non</label>
                <!--- Fin --->     
                <hr class="dashed">
                <div class="label">Réfugié politique</div>
                <input type="radio" name="is_refugie_politique" value="1" onclick="hideshowasile()" id="oui_refugie_politique" @if ($inscrit->is_refugie_politique == 1) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_refugie_politique">Oui</label>
                <input type="radio" name="is_refugie_politique" value="0" onclick="hideshowasile()" id="non_refugie_politique" @if ($inscrit->is_refugie_politique == 0) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_refugie_politique">Non</label>
                <!--- Si oui --->
                <div id="div_politique">
                    <hr class="dashed">
                    <div class="field">
                        <div class="label">Date d'arrivé en france</div>
                        <input type="date" name="dte_arrivee_fr" value="{{$inscrit->dte_arrivee_fr}}">
                    </div>
                    </div>
                    <!--- Fin --->  
                    <hr class="dashed">
                    <div class="label">Inscrit à France travail</div>
                    <input type="radio" name="is_france_travail" value="1" onclick="hideshowfrance(1)" id="oui_pole_emplois" @if ($inscrit->is_france_travail == 1) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="oui_pole_emplois">Oui</label>
                    <input type="radio" name="is_france_travail" value="0" onclick="hideshowfrance(2)" id="non_pole_emplois" @if ($inscrit->is_france_travail == 0) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_pole_emplois">Non</label>
                
                <!--- Si oui --->
                <div id="div_france" class="hidden">
                    <div class="field">
                        <div class="label">Date d'inscription à France travail</div>
                        <input type="date" name="france_dte_inscription" value="{{$inscrit->franceTravail?->dte_inscription}}">
                    </div>
                    <div class="field">
                        <div class="label">Nom référent</div>
                        <input type="text" name="france_nom_ref" value="{{$inscrit->franceTravail?->nom_ref}}">
                    </div>
                    </div>
                <!--- Fin --->
                <hr class="dashed">
                        <div class="label">Inscrit à Soélis</div>
                        <input type="radio" name="is_soelis" value="1" onclick="hideshowsoelis(1)" id="oui_soelis" @if ($inscrit->is_soelis == 1) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="oui_soelis">Oui</label>
                        <input type="radio" name="is_soelis" value="0" onclick="hideshowsoelis(2)" id="non_soelis" @if ($inscrit->is_soelis == 0) @checked(true) @else @checked(false) @endif>
                        <label class="label" for="non_soelis">Non</label>
                
                <!--- Si oui --->
                <div id="div_soelis" class="hidden">
                    <div class="field">
                        <div class="label">Date d'inscription à Soélis</div>
                        <input type="date" name="soelis_dte_inscription" value="{{$inscrit->soelis?->dte_inscription}}">
                    </div>
                    <div class="field">
                        <div class="label">Nom référent</div>
                        <input type="text" name="soelis_nom_ref" value="{{$inscrit->soelis?->nom_ref}}">
                    </div>
                    </div>
                <!--- Fin --->
                <hr class="dashed">
                <div class="label">Inscrit à la chambre des métiers et de l'artisanat</div>
                <input type="radio" name="is_cma" value="1" onclick="hideshowcma(1)" id="oui_cma" @if ($inscrit->is_cma == 1) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_cma">Oui</label>
                <input type="radio" name="is_cma" value="0" onclick="hideshowcma(2)" id="non_cma" @if ($inscrit->is_cma == 0) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_cma">Non</label>
                
                <!--- Si oui --->
                <div id="div_cma" class="hidden">
                    <div class="field">
                        <div class="label" id="label_cma">Date d'inscription la chambre des métiers et de l'artisanat</div>
                        <input type="date" name="cma_dte_inscription" value="{{$inscrit->cma?->dte_inscription}}">
                    </div>
                    <div class="field">
                        <div class="label">Nom référent</div>
                        <input type="text" name="cma_nom_ref" value="{{$inscrit->cma?->nom_ref}}">
                    </div>
                    </div>
                <!--- Fin --->
                <hr class="dashed">
                <div class="label">Inscrit à la Mission locale</div>
                <input type="radio" name="is_mission_locale" value="1" onclick="hideshowmission(1)" id="oui_mission_locale" @if ($inscrit->is_mission_locale == 1) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_mission_locale">Oui</label>
                <input type="radio" name="is_mission_locale" value="0" onclick="hideshowmission(2)" id="non_mission_locale" @if ($inscrit->is_mission_locale == 0) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_mission_locale">Non</label>
                
                <!--- Si oui --->
                <div id="div_mission" class="hidden">
                    <div class="field">
                        <div class="label">Date d'inscription à la Mission locale</div>
                        <input type="date" name="mission_dte_inscription" value="{{$inscrit->missionLocale?->dte_inscription}}">
                    </div>
                    <div class="field">
                        <div class="label">Nom référent</div>
                        <input type="text" name="mission_nom_ref" value="{{$inscrit->missionLocale?->nom_ref}}">
                    </div>
                    </div>
                <!--- Fin --->
                <hr class="dashed">
                <div class="label">Inscrit à CAP emplois</div>
                <input type="radio" name="is_cap_emploi" value="1" onclick="hideshowcap(1)" id="oui_cap_emploi" @if ($inscrit->is_cap_emploi == 1) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_cap_emploi">Oui</label>
                <input type="radio" name="is_cap_emploi" value="0" onclick="hideshowcap(2)" id="non_cap_emploi" @if ($inscrit->is_cap_emploi == 0) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_cap_emploi">Non</label>
                
                <!--- Si oui --->
                <div id="div_cap" class="hidden">
                    <div class="field">
                        <div class="label">Date d'inscription CAP emplois</div>
                        <input type="date" name="cap_dte_inscription" value="{{$inscrit->capEmploi?->dte_inscription}}">
                    </div>
                    <div class="field">
                        <div class="label">Nom référent</div>
                        <input type="text" name="cap_nom_ref" value="{{$inscrit->capEmploi?->nom_ref}}">
                    </div>
                    </div>
                <!--- Fin --->
                <hr class="dashed">
                <div class="label">CV disponible</div>
                <input type="radio" name="is_cv" value="1" onclick="hideshowcv(1)" id="oui_cv" @if ($inscrit->is_cv == 1) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_cv">Oui</label>
                <input type="radio" name="is_cv" value="0" onclick="hideshowcv(2)" id="non_cv" @if ($inscrit->is_cv == 0) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_cv">Non</label>
                
                    <!--- Si oui --->
                    <div id="div_cv_oui">
                    <div class="field">
                        <div class="label" id="label_cv">Insérer le cv scanné (format PDF uniquement)</div>
                        <input type="file" name="cv_nom" value="{{$inscrit->cv->nom}}">
                    </div>
                    </div>
                    <!--- Si non --->
                    <div id="div_cv_non">
                    <div class="field">
                        <div class="label" id="label_cv">Date programmé pour travailler le CV (laisser vide si pas de date)</div>
                        <input type="date" name="dte_travailler" value="{{$inscrit->cv?->dte_travailler}}" value="{{$inscrit->cv?->dte_travailler}}">
                    </div>
                    </div>
                <!--- Fin --->
                <hr class="dashed">
                <div class="label">A le Permis</div>
                <input type="radio" name="is_permis" value="1" onclick="hideshowpermis(1)" id="oui_permis" @if ($inscrit->is_permis == 1) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_permis">Oui</label>
                <input type="radio" name="is_permis" value="0" onclick="hideshowpermis(2)" id="non_permis" @if ($inscrit->is_permis == 0) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_permis">Non</label>
                
                <!--- Si oui --->
                    <div id="div_permis" class="hidden">
                    <!--- Si oui un/plusieurs --->
                    <div class="field">
                    <div class="label">Permis</div>
                    <select name="type" onchange="hideshowpermischoix()" id="choix_permis">
                        <option value="aucun" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('type', 'aucun')) @selected(true) @endif>Choisir un permis</option>
                        <option value="aucun" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('type', 'aucun')) @selected(true) @endif>aucun</option>
                        <option value="autos" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('type', 'autos')) @selected(true) @endif>Permis autos</option>
                        <option value="motos" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('type', 'motos')) @selected(true) @endif>Permis motos</option>
                        <option value="marchandises" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('type', 'marchandises')) @selected(true) @endif>Permis marchandises ou de personnes</option>
                    </select>
                    </div>
                    </div>
                    <!--- Si non (rien) --->
                    <!--- Si autos --->
                    <div id="autos" class="hidden">
                    <div class="field">
                    <div class="label">Permis autos</div>
                    <select name="autos_categorie">
                        <option value="aucun" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('categorie', 'aucun')) @selected(true) @endif>Choisir une catégorie</option>
                        <option value="B" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('categorie', 'B')) @selected(true) @endif>B</option>
                        <option value="B1" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('categorie', 'B1')) @selected(true) @endif>B1</option>
                        <option value="BE" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('categorie', 'BE')) @selected(true) @endif>BE</option>
                    </select>
                    </div>
                    </div>
                    <!--- Si motos --->
                    <div id="motos" class="hidden">
                    <div class="field">
                    <div class="label">Permis motos</div>
                    <select name="motos_categorie">
                        <option value="aucun" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('categorie', 'aucun')) @selected(true) @endif>Choisir une catégorie</option>
                        <option value="A" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('categorie', 'A')) @selected(true) @endif>A</option>
                        <option value="A1" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('categorie', 'A1')) @selected(true) @endif>A1</option>
                        <option value="A2" @if ($inscrit->permis->isEmpty() || $inscrit->permis->contains('categorie', 'A2')) @selected(true) @endif>A2</option>
                    </select>
                    </div>
                    </div>
                    <!--- Si marchandises ou personnes --->
                    <div id="marchandises" class="hidden">
                    <div class="field">
                    <div class="label">Permis marchandises ou de personnes</div>
                    <select name="marchandises_categorie">
                        <option value="aucun" @if ($inscrit->permis->contains('categorie', 'aucun')) @selected(true) @endif>Aucun</option>
                        <option value="C" @if ($inscrit->permis->contains('categorie', 'C')) @selected(true) @endif>C</option>
                        <option value="CE" @if ($inscrit->permis->contains('categorie', 'CE')) @selected(true) @endif>CE</option>
                        <option value="C1" @if ($inscrit->permis->contains('categorie', 'C1')) @selected(true) @endif>C1</option>
                        <option value="C1E" @if ($inscrit->permis->contains('categorie', 'C1E')) @selected(true) @endif>C1E</option>
                        <option value="D" @if ($inscrit->permis->contains('categorie', 'D')) @selected(true) @endif>D</option>
                        <option value="DE" @if ($inscrit->permis->contains('categorie', 'DE')) @selected(true) @endif>DE</option>
                        <option value="D1" @if ($inscrit->permis->contains('categorie', 'D1')) @selected(true) @endif>D1</option>
                        <option value="D1E" @if ($inscrit->permis->contains('categorie', 'D1E')) @selected(true) @endif>D1E</option>
                    </select>
                    </div>
                    </div>
                    <!--- Autres permis --->
                <div class="field hidden" id="autre_permis">
                    <div class="label">Autres permis</div>
                    <input type="text" name="autre_permis" value="{{ $inscrit->permis->first()?->autre }}">
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
                    <a class="prev-2 prev" onclick="redirigerVersHaut()">Précédent</a>
                    <a class="next-2 next" onclick="redirigerVersHaut()">Suivant</a>
                </div>
            </div>
            <!---  Page 4 : FORMATION  --->
        <div class="page 4" id="page4">
                <div class="title">Formations :</div>
                <div class="label">Diplôme(s) obtenus</div>
                <input type="radio" name="is_diplome" value="1" onclick="hideshowdiplome(1)" id="oui_diplome" @if ($inscrit->is_diplome == 1) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="oui_diplome">Oui</label>
                    <input type="radio" name="is_diplome" value="0" onclick="hideshowdiplome(2)" id="non_diplome" @if ($inscrit->is_diplome == 0) @checked(true) @else @checked(false) @endif>
                    <label class="label" for="non_diplome">Non</label>
                    <p></p>
                @if($inscrit->is_diplome==0)
                    @foreach($inscrit->diplomes as $diplome)
                        <div id="diplome_non">
                            <label for="nb_annee">Nombre d'années d'études</label>
                            <input type="text" name="nb_annee" id="nb_annee" value="{{$diplome->nb_annee}}">
                            <label for="diplome_type">Renseigner le niveau</label>
                            <input type="text" name="diplome_type" id="diplome_type" value="{{$diplome->type}}">
                        </div>
                    @endforeach
                @endif
                <hr class="dashed" id="hr_diplome">
                <div id="diplomes_container" class="field2">
                    <div class="div_warn">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Si vous souhaitez supprimer un diplome déjà existant, il faut laisser la case de son prénom vide
                    </div>
                    <p></p>
                    <a href="#" id="genererDiplome" class="genererEnfant"><i class="fa-solid fa-plus"></i></a>
                    <a href="#" id="supprimerDiplome" class="supprimerEnfant"><i class="fa-solid fa-minus"></i></a>
                    <p></p>
                    <input type="text" id="inputnb_diplome" name="nb_diplome" value="{{$inscrit->diplomes->count()}}" readonly>
                    <hr class="dashed">
                    @php
                    $i=1
                    @endphp
                    @foreach($inscrit->diplomes as $diplome)
                    <div class="diplome" name="div_diplome{{$i}}" id="div_diplome{{$i}}">
                        <label class="label">Type de diplôme {{$i}}</label>
                        <select name="nom_diplome_{{$i}}" id="diplome_{{$i}}" onchange="hideshowdiplomechoix()">
                            <option value="choisir un diplôme"@if($diplome->type == "choisir un diplôme") @selected(true) @endif>Choisir un diplôme</option>
                            <option value="brevet" @if($diplome->type == "brevet") @selected(true) @endif>Brevet</option>
                            <option value="cap" @if($diplome->type == "cap") @selected(true) @endif>Cap</option>
                            <option value="bep" @if($diplome->type == "bep") @selected(true) @endif>BEP</option>
                            <option value="bac" @if($diplome->type == "bac") @selected(true) @endif>BAC</option>
                            <option value="bac+2" @if($diplome->type == "bac+2") @selected(true) @endif>BAC+2</option>
                            <option value="licence" @if($diplome->type == "licence") @selected(true) @endif>Licence</option>
                            <option value="master1" @if($diplome->type == "master1") @selected(true) @endif>Master1</option>
                            <option value="master2" @if($diplome->type == "master2") @selected(true) @endif>Master2</option>
                            <option value="autre" @if($diplome->type == "autre") @selected(true) @endif>Autre</option>
                            <option value="formation continue"@if ($diplome->type == "formation continue") @selected(true) @endif>Formation continue</option>
                        </select>
                        <div id="responses_container_{{$i}}">
                            <div class="field">
                                @if($diplome->type == "brevet")
                                @endif
                                @if($diplome->type == "cap")
                                <div class="label">Renseigner le type de métier</div>
                                <input type="text" name="niveau_cap_{{$i}}" value="{{$diplome->specialite}}">
                                @endif
                                @if($diplome->type == "bep")
                                <div class="label">Renseigner la spécialité</div>
                                <input type="text" name="niveau_bep_{{$i}}" value="{{$diplome->specialite}}">
                                @endif
                                @if($diplome->type == "bac")
                                <div class="label">Renseigner la spécialité</div>
                                <input type="text" name="niveau_bac_{{$i}}" value="{{$diplome->specialite}}">
                                @endif
                                @if($diplome->type == "bac+2")
                                <div class="label">Renseigner la spécialité</div>
                                <input type="text" name="niveau_bac+2_{{$i}}" value="{{$diplome->specialite}}">
                                @endif
                                @if($diplome->type == "licence")
                                <div class="label">Renseigner la spécialité</div>
                                <input type="text" name="niveau_licence_{{$i}}" value="{{$diplome->specialite}}">
                                @endif
                                @if($diplome->type == "master1")
                                <div class="label">Renseigner la spécialité</div>
                                <input type="text" name="niveau_master1_{{$i}}" value="{{$diplome->specialite}}">
                                @endif
                                @if($diplome->type == "master2")
                                <div class="label">Renseigner la spécialité</div>
                                <input type="text" name="niveau_master2_{{$i}}" value="{{$diplome->specialite}}">
                                @endif
                                @if($diplome->type == "autre")
                                <div class="label">Renseigner le diplôme</div>
                                <input type="text" name="niveau_autre_{{$i}}" value="{{$diplome->specialite}}">
                                @endif
                                @if($diplome->type == "formation continue")
                                <div class="label">Renseigner la formation</div>
                                <input type="text" name="niveau_formation_continue_{{$i}}" value="{{$diplome->specialite}}">
                                @endif
                            </div>
                        </div>
                        <hr class="dashed">
                    </div>
                        @php
                        $i=$i+1
                        @endphp
                    @endforeach
                </div>

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
            <input type="radio" name="is_form_prevue" value="1" onclick="hideshowformprevu(1)" id="oui_prevue" @if ($inscrit->reconvPro && $inscrit->reconvPro->is_form_prevue == 1) @checked(true) @else @checked(false) @endif>     
            <label class="label" for="oui_prevue">Oui</label>
            <input type="radio" name="is_form_prevue" value="0" onclick="hideshowformprevu(2)" id="non_prevue" @if ($inscrit->reconvPro && $inscrit->reconvPro->is_form_prevue == 0) @checked(true) @else @checked(false) @endif>
            <label class="label" for="non_prevue">Non</label>
            </div>
                <!--- Si non (rien) --->
                <!--- Si oui --->
                <div id="div_form_prevu">
                    <div class="field">
                        <div class="label">Renseigner le nom : </div>
                        <input type="text" name="reconv_nom" value="{{$inscrit->reconvPro?->nom}}">
                    </div>
                    <div class="field">
                        <div class="label">Renseigner la date : </div>
                        <input type="date" name="reconv_date" value="{{$inscrit->reconvPro?->date}}">
                    </div>
                    <div class="field">
                        <div class="label">Renseigner la durée : </div>
                        <input type="text" name="reconv_duree" value="{{$inscrit->reconvPro?->duree}}">
                    </div>
                    </div>
               <!--- Fin --->
               <hr class="dashed">
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
                   <input type="text" name="nom_diplome_reprise" value="{{$inscrit->repriseEtude?->nom_diplome}}">
               </div>
               </div>
                <!--- Si fin --->
                <hr class="dashed">
                <div class="label">La personne va-t-elle bénéficier d'une formation professionnelle</div>
                <input type="radio" name="is_formation_pro" value="1" onclick="hideshowformpro(1)" id="oui_form_pro" @if ($inscrit->is_formation_pro == 1) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_form_pro">Oui</label>
                <input type="radio" name="is_formation_pro" value="0" onclick="hideshowformpro(2)" id="non_form_pro" @if ($inscrit->is_formation_pro == 0) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_form_pro">Non</label>
                <!--- Si oui --->
                <div id="div_form_pro" class="hidden">
                <div class="field">
                    <div class="label">Type de formation</div>
                    <select name="type_formation_pro" onchange="hideshowtypeform()" id="type_form">
                        <option value="aucun" @if (!$inscrit->formationPro || $inscrit->formationPro->type == "aucun") @selected(true) @endif>Choisir un type de formation</option>
                        <option value="qualifiante" @if (!$inscrit->formationPro || $inscrit->formationPro->type == "qualifiante") @selected(true) @endif>Qualifiante</option>
                        <option value="diplomante" @if (!$inscrit->formationPro || $inscrit->formationPro->type == "diplomante") @selected(true) @endif>Diplômante</option>
                    </select>
                </div>
                </div>
                    <!--- Si diplomante --->
                    <div id="diplomante">
                        <div class="field">
                            <div class="label">Nom de la formation diplômante</div>
                            <input type="text" name="diplome_formation_pro" value="{{$inscrit->formationPro?->nom}}">
                        </div>
                        </div>
                        <!--- Si qualifiante --->
                        <div id="qualifiante">
                        <div class="field">
                            <div class="label">Nom de la formation qualifiante</div>
                            <input type="text" name="qualifiante_formation_pro" value="{{$inscrit->formationPro?->nom}}">
                        </div>
                        </div>
                        <!--- Fin --->
                        <hr class="dashed">
                        <div class="field">
                            <div class="label">Métier souhaité</div>
                            <input type="text" name="nom_metier" value="{{$inscrit->metierSouhaite?->nom}}">
                        </div>
                        <div class="field">
                            <div class="label">Secteur d'activité</div>
                            <input type="text" name="secteur_act" value="{{$inscrit->metierSouhaite?->secteur_act}}">
                        </div>
                        <div class="field">
                            <div class="label">Secteur géographique</div>
                            <input type="text" name="secteur_geo" value="{{$inscrit->metierSouhaite?->secteur_geo}}">
                        </div>
                <hr class="dashed">
                <div class="label">Connaissance en bureautique ou logiciels</div>
                <input type="radio" name="is_logiciel" value="1" onclick="hideshowlogiciel(1)" id="oui_logiciel" @if ($inscrit->is_logiciel == 1) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_logiciel">Oui</label>
                <input type="radio" name="is_logiciel" value="0" onclick="hideshowlogiciel(2)" id="non_logiciel" @if ($inscrit->is_logiciel == 0) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_logiciel">Non</label>
                <div id="div_logiciel">
                    <div class="field">
                        <div class="label">Préciser</div>
                        <input type="text" name="logiciel" value="{{$inscrit->logiciel}}">
                    </div>
                </div>
                <hr class="dashed">
                <div class="label">Horaire de travail souhaité</div>
                <div class="horaires">
                    <div class="horaire">
                        <input type="checkbox" name="nb_horaire1" value="Travail de nuit" id="nuit" @if ($inscrit->horaires->isNotEmpty() && $inscrit->horaires->first()->type == "Travail de nuit") 
                        @checked(true) 
                    @else 
                        @checked(false) 
                    @endif>
                        <label class="label" for="nuit">Travail de nuit</label>
                    </div>
                    <div class="horaire">
                        <input type="checkbox" name="nb_horaire2" value="Travail la journee" id="journee" @if ($inscrit->horaires->isNotEmpty() && $inscrit->horaires->contains('type', 'Travail la journee'))
                        @checked(true)
                    @else
                        @checked(false)
                    @endif>
                        <label class="label" for="journee">Travail la journée</label>
                    </div>
                    <div class="horaire">
                        <input type="checkbox" name="nb_horaire3" value="Travail le matin" id="matin" @if ($inscrit->horaires->isNotEmpty() && $inscrit->horaires->contains('type', 'Travail le matin'))
                        @checked(true)
                    @else
                        @checked(false)
                    @endif>
                        <label class="label" for="matin">Travail le matin</label>
                    </div>
                    <div class="horaire">
                        <input type="checkbox" name="nb_horaire4" value="Travail en cyble 2x8" id="2x8" @if ($inscrit->horaires->isNotEmpty() && $inscrit->horaires->contains('type', 'Travail en cyble 2x8'))
                        @checked(true)
                    @else
                        @checked(false)
                    @endif>
                        <label class="label" for="2x8">Travail en cycle 2x8</label>
                    </div>
                    <div class="horaire">
                        <input type="checkbox" name="nb_horaire5" value="Travail en cycle 3x8" id="3x8" @if ($inscrit->horaires->isNotEmpty() && $inscrit->horaires->contains('type', 'Travail en cycle 3x8'))
                        @checked(true)
                    @else
                        @checked(false)
                    @endif>
                        <label class="label" for="3x8">Travail en cycle 3x8</label>
                    </div>
                    <div class="horaire">
                        <input type="checkbox" name="nb_horaire6" value="Travail en cycle 5x8" id="5x8" @if ($inscrit->horaires->isNotEmpty() && $inscrit->horaires->contains('type', 'Travail en cycle 5x8'))
                        @checked(true)
                    @else
                        @checked(false)
                    @endif>
                        <label class="label" for="5x8">Travail en cycle 5x8</label>
                    </div>
                    <div class="horaire">
                        <input type="checkbox" name="nb_horaire7" value="Travail en VSD" id="VSD" @if ($inscrit->horaires->isNotEmpty() && $inscrit->horaires->contains('type', 'Travail en VSD'))
                        @checked(true)
                    @else
                        @checked(false)
                    @endif>
                        <label class="label" for="VSD">Travail en VSD</label>
                    </div>
                    <div class="horaire">
                        <input type="checkbox" name="nb_horaire8" value="Travail en SD" id="SD" @if ($inscrit->horaires->isNotEmpty() && $inscrit->horaires->contains('type', 'Travail en SD'))
                        @checked(true)
                    @else
                        @checked(false)
                    @endif>
                        <label class="label" for="journee">Travail en SD</label>
                    </div>
                </div>

                <div class="field btns">
                    <a class="prev-3 prev" onclick="redirigerVersHaut()">Précédent</a>
                    <a class="next-3 next" onclick="redirigerVersHaut()">Suivant</a>
                </div>
        </div>

        <script>  function hideshowlogiciel(val) {
            if (val == 1) {
                document.getElementById('div_logiciel').style.display = 'block';
            }
            if (val == 2) {
                document.getElementById('div_logiciel').style.display = 'none';
            }
        }</script>
        
            <!---  Page 5 : LANGUES  --->
            <div class="page 5" id="page5">
                <div class="title">Langues</div>
                <div class="label">Inscrit aux ateliers de français</div>
                <input type="radio" name="is_atelier" value="1" id="oui_fr" @if ($inscrit->langue->contains('is_atelier', 1)) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_fr">Oui</label>
                <input type="radio" name="is_atelier" value="0" id="non_fr" @if ($inscrit->langue->contains('is_atelier', 0)) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_fr">Non</label>
                <div class="field">
                    <div class="label">Connaissance en français écrit</div>
                    <select name="fr_ecrit">
                       <option value="0" @if ($inscrit->langue->where('fr_ecrit', '0')->count() > 0) @selected(true) @endif>Choisir un niveau</option>
                       <option value="1" @if ($inscrit->langue->where('fr_ecrit', '1')->count() > 0) @selected(true) @endif>A1</option>
                       <option value="2" @if ($inscrit->langue->where('fr_ecrit', '2')->count() > 0) @selected(true) @endif>A2</option>
                       <option value="3" @if ($inscrit->langue->where('fr_ecrit', '3')->count() > 0) @selected(true) @endif>B1</option>
                       <option value="4" @if ($inscrit->langue->where('fr_ecrit', '4')->count() > 0) @selected(true) @endif>B2</option>
                       <option value="5" @if ($inscrit->langue->where('fr_ecrit', '5')->count() > 0) @selected(true) @endif>C1</option>
                       <option value="6" @if ($inscrit->langue->where('fr_ecrit', '6')->count() > 0) @selected(true) @endif>C2</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Connaissance en français parlé</div>
                    <select name="fr_parle">
                       <option value="0" @if ($inscrit->langue->where('fr_parle', '0')->count() > 0) @selected(true) @endif>Choisir un niveau</option>
                       <option value="1" @if ($inscrit->langue->where('fr_parle', '1')->count() > 0) @selected(true) @endif>A1</option>
                       <option value="2" @if ($inscrit->langue->where('fr_parle', '2')->count() > 0) @selected(true) @endif>A2</option>
                       <option value="3" @if ($inscrit->langue->where('fr_parle', '3')->count() > 0) @selected(true) @endif>B1</option>
                       <option value="4" @if ($inscrit->langue->where('fr_parle', '4')->count() > 0) @selected(true) @endif>B2</option>
                       <option value="5" @if ($inscrit->langue->where('fr_parle', '5')->count() > 0) @selected(true) @endif>C1</option>
                       <option value="6" @if ($inscrit->langue->where('fr_parle', '6')->count() > 0) @selected(true) @endif>C2</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Connaissance en français lu</div>
                    <select name="fr_lu">
                       <option value="0" @if ($inscrit->langue->where('fr_lu', '0')->count() > 0) @selected(true) @endif>Choisir un niveau</option>
                       <option value="1" @if ($inscrit->langue->where('fr_lu', '1')->count() > 0) @selected(true) @endif>A1</option>
                       <option value="2" @if ($inscrit->langue->where('fr_lu', '2')->count() > 0) @selected(true) @endif>A2</option>
                       <option value="3" @if ($inscrit->langue->where('fr_lu', '3')->count() > 0) @selected(true) @endif>B1</option>
                       <option value="4" @if ($inscrit->langue->where('fr_lu', '4')->count() > 0) @selected(true) @endif>B2</option>
                       <option value="5" @if ($inscrit->langue->where('fr_lu', '5')->count() > 0) @selected(true) @endif>C1</option>
                       <option value="6" @if ($inscrit->langue->where('fr_lu', '6')->count() > 0) @selected(true) @endif>C2</option>
                    </select>
                </div>
                <div class="title">Anglais</div>
                <div class="field">
                    <div class="label">Connaissance en anglais écrit</div>
                    <select name="en_ecrit">
                       <option value="0" @if ($inscrit->langue->where('en_ecrit', '0')->count() > 0) @selected(true) @endif>Choisir un niveau</option>
                       <option value="1" @if ($inscrit->langue->where('en_ecrit', '1')->count() > 0) @selected(true) @endif>A1</option>
                       <option value="2" @if ($inscrit->langue->where('en_ecrit', '2')->count() > 0) @selected(true) @endif>A2</option>
                       <option value="3" @if ($inscrit->langue->where('en_ecrit', '3')->count() > 0) @selected(true) @endif>B1</option>
                       <option value="4" @if ($inscrit->langue->where('en_ecrit', '4')->count() > 0) @selected(true) @endif>B2</option>
                       <option value="5" @if ($inscrit->langue->where('en_ecrit', '5')->count() > 0) @selected(true) @endif>C1</option>
                       <option value="6" @if ($inscrit->langue->where('en_ecrit', '6')->count() > 0) @selected(true) @endif>C2</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Connaissance en anglais parlé</div>
                    <select name="en_parle">
                       <option value="0" @if ($inscrit->langue->where('en_parle', '0')->count() > 0) @selected(true) @endif>Choisir un niveau</option>
                       <option value="1" @if ($inscrit->langue->where('en_parle', '1')->count() > 0) @selected(true) @endif>A1</option>
                       <option value="2" @if ($inscrit->langue->where('en_parle', '2')->count() > 0) @selected(true) @endif>A2</option>
                       <option value="3" @if ($inscrit->langue->where('en_parle', '3')->count() > 0) @selected(true) @endif>B1</option>
                       <option value="4" @if ($inscrit->langue->where('en_parle', '4')->count() > 0) @selected(true) @endif>B2</option>
                       <option value="5" @if ($inscrit->langue->where('en_parle', '5')->count() > 0) @selected(true) @endif>C1</option>
                       <option value="6" @if ($inscrit->langue->where('en_parle', '6')->count() > 0) @selected(true) @endif>C2</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Connaissance en anglais lu</div>
                    <select name="en_lu">
                       <option value="0" @if ($inscrit->langue->where('en_lu', '0')->count() > 0) @selected(true) @endif>Choisir un niveau</option>
                       <option value="1" @if ($inscrit->langue->where('en_lu', '1')->count() > 0) @selected(true) @endif>A1</option>
                       <option value="2" @if ($inscrit->langue->where('en_lu', '2')->count() > 0) @selected(true) @endif>A2</option>
                       <option value="3" @if ($inscrit->langue->where('en_lu', '3')->count() > 0) @selected(true) @endif>B1</option>
                       <option value="4" @if ($inscrit->langue->where('en_lu', '4')->count() > 0) @selected(true) @endif>B2</option>
                       <option value="5" @if ($inscrit->langue->where('en_lu', '5')->count() > 0) @selected(true) @endif>C1</option>
                       <option value="6" @if ($inscrit->langue->where('en_lu', '6')->count() > 0) @selected(true) @endif>C2</option>
                    </select>
                </div>
                <div class="label">Autre(s) langue(s) parlée(s)</div>
                <input type="radio" name="is_autre" value="1" onclick="hideshowlangue(1)" id="oui_autre" @if ($inscrit->langue->contains('is_autre', 1)) @checked(true) @else @checked(false) @endif>
                <label class="label" for="oui_autre">Oui</label>
                <input type="radio" name="is_autre" value="0" onclick="hideshowlangue(2)" id="non_autre" @if ($inscrit->langue->contains('is_autre', 0)) @checked(true) @else @checked(false) @endif>
                <label class="label" for="non_autre">Non</label>
                <!--- Si oui --->
                <div id="div_langue" class="hidden">
                <div class="field">
                    <input type="text" name="autre_langue" value="{{ optional($inscrit->langue->first())->autre }}">
                </div>
                </div>
                <!--- Fin --->
                <div class="field btns">
                    <a class="prev-4 prev" onclick="redirigerVersHaut()">Précédent</a>
                    <a class="next-4 next" onclick="redirigerVersHaut()">Suivant</a>
                </div>
            </div>
            <!---  Page 6 : INFORMATIONS COMPLEMENTAIRES  --->
            <div class="page 6" id="page6">
                <div class="title">Informations complémentaires</div>
                <div class="field">
                    <div class="label">Notes</div>
                    <textarea type="text" name="infos_comp" id="info_compleme" value="">{{$inscrit->infos_comp}}</textarea>
                </div>
                <br>
                <div class="field btns">
                    <a class="prev-5 prev" onclick="redirigerVersHaut()">Précédent</a>
                    <button class="submit next">Confirmer</button>

                </div>
            </div>
    </form>
</div>
</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Appel initial pour configurer l'état basé sur les valeurs des champs
        initialSetup();
    
        // Fonction pour extraire la valeur d'un champ (select ou input) par son id
        function getValueById(id) {
            const element = document.getElementById(id);
            return element ? element.value : null;
        }
    
        // Fonction pour extraire la valeur du champ radio/checkbox avec un id commencant par "oui_" ou "non_"
        function getValueByIdPrefix(prefix) {
            const element = document.querySelector(`input[id^="${prefix}"]:checked`);
            return element ? element.value : null;
        }
    
        // Fonction pour effectuer l'initialisation basée sur les valeurs actuelles des champs
        function initialSetup() {
            // Appeler chaque fonction avec les valeurs initiales des champs
            hideshowrdc(getValueByIdPrefix('oui_rdc'));
            hideshowenfant(getValueByIdPrefix('oui_enfant'));
            hideshowcv(getValueByIdPrefix('non_cv'));
            hideshowrevenus(getValueById('revenus'));
            // ... (le reste de votre code)
    
            // Appeler chaque fonction avec les valeurs initiales des champs select
            hideshowtypeform(getValueById('type_form'));
            hideshowpermischoix(getValueById('choix_permis'));
            
            // Afficher les données des enfants au chargement de la page
            showChildrenData();
        }
    });
        // Fonction pour afficher les données des enfants

    </script>

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
