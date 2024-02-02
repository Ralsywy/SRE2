
function hideshowrdc(val) {
    if (val == 1) {
        document.getElementById('div_rdc').style.display = 'inline-block';
    }
    if (val == 2) {
        document.getElementById('div_rdc').style.display = 'none';
    }
}

function hideshowenfant(val) {
    if (val == 1) {
        document.getElementById('div_enfant').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_enfant').style.display = 'none';
    }
}

function hideshowrevenus() {
    var autre = document.getElementById("revenus").value;
    if (autre == "autre") {
      document.getElementById('preciser').style.display = 'block';
    } else {
      document.getElementById('preciser').style.display = 'none';
    }
  }

  function hideshowfrance(val) {
    if (val == 1) {
        document.getElementById('div_france').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_france').style.display = 'none';
    }
}

function hideshowasile() {
    var oui_asile = document.getElementById('oui_demande_asile').checked;
    var non_asile = document.getElementById('non_demande_asile').checked;
    var oui_refugie = document.getElementById('oui_refugie_politique').checked;
    var non_refugie = document.getElementById('non_refugie_politique').checked;
    if (oui_asile || oui_refugie) {
        document.getElementById('div_politique').style.display = 'block';
    }
    else{
        document.getElementById('div_politique').style.display = 'none';
    }
}

function hideshowsoelis(val) {
    if (val == 1) {
        document.getElementById('div_soelis').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_soelis').style.display = 'none';
    }
}

function hideshowcma(val) {
    if (val == 1) {
        document.getElementById('div_cma').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_cma').style.display = 'none';
    }
}

function hideshowmission(val) {
    if (val == 1) {
        document.getElementById('div_mission').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_mission').style.display = 'none';
    }
}

function hideshowcap(val) {
    if (val == 1) {
        document.getElementById('div_cap').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_cap').style.display = 'none';
    }
}

function hideshowcv(val) {
    if (val == 1) {
        document.getElementById('div_cv_oui').style.display = 'block';
        document.getElementById('div_cv_non').style.display = 'none';
    }
    if (val == 2) {
        document.getElementById('div_cv_oui').style.display = 'none';
        document.getElementById('div_cv_non').style.display = 'block';
    }
}

function hideshowpermis(val) {
    if (val == 1) {
        document.getElementById('div_permis').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_permis').style.display = 'none';
        document.getElementById('autos').style.display = 'none';
        document.getElementById('marchandises').style.display = 'none';
        document.getElementById('motos').style.display = 'none';
    }
}

function hideshowpermischoix() {
    var permis = document.getElementById("choix_permis").value;
    if (permis == "autos") {
        document.getElementById('autos').style.display = 'block';
        document.getElementById('autre_permis').style.display = 'block';
        document.getElementById('marchandises').style.display = 'none';
        document.getElementById('motos').style.display = 'none';
    } if (permis == "motos") {
        document.getElementById('autre_permis').style.display = 'block';
        document.getElementById('autos').style.display = 'none';
        document.getElementById('marchandises').style.display = 'none';
        document.getElementById('motos').style.display = 'block';
    } if (permis == "marchandises") {
        document.getElementById('autre_permis').style.display = 'block';
        document.getElementById('autos').style.display = 'none';
        document.getElementById('marchandises').style.display = 'block';
        document.getElementById('motos').style.display = 'none';
    } if (permis == "aucun") {
        document.getElementById('autos').style.display = 'none';
        document.getElementById('autre_permis').style.display = 'none';
        document.getElementById('marchandises').style.display = 'none';
        document.getElementById('motos').style.display = 'none';
      }
  }

function hideshowvehiculedispo(val) {
    if (val == 1) {
        document.getElementById('div_vehicule_prevu').style.display = 'none';
        document.getElementById('div_vehicule_dispo').style.display = 'none';
    }
    if (val == 2) {
        document.getElementById('div_vehicule_dispo').style.display = 'block';
    }
}

function hideshowvehiculeprevu(val) {
    if (val == 1) {
        document.getElementById('div_vehicule_prevu').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_vehicule_prevu').style.display = 'none';
    }
}

function hideshowdiplomechoix() {
    var diplome = document.getElementById("diplome").value;
    if (diplome == "cap") {
        document.getElementById('autre_diplome').style.display = 'none';
        document.getElementById('master1').style.display = 'none';
        document.getElementById('master2').style.display = 'none';
        document.getElementById('licence').style.display = 'none';
        document.getElementById('BAC2').style.display = 'none';
        document.getElementById('formation_continue').style.display = 'none';
        document.getElementById('BAC').style.display = 'none';
        document.getElementById('CAP').style.display = 'block';
        document.getElementById('BEP').style.display = 'none';
    } 
    if (diplome == "bep") {
        document.getElementById('autre_diplome').style.display = 'none';
        document.getElementById('master1').style.display = 'none';
        document.getElementById('master2').style.display = 'none';
        document.getElementById('formation_continue').style.display = 'none';
        document.getElementById('licence').style.display = 'none';
        document.getElementById('BAC2').style.display = 'none';
        document.getElementById('BAC').style.display = 'none';
        document.getElementById('CAP').style.display = 'none';
        document.getElementById('BEP').style.display = 'block';
    } 
    if (diplome == "bac") {
        document.getElementById('autre_diplome').style.display = 'none';
        document.getElementById('master1').style.display = 'none';
        document.getElementById('master2').style.display = 'none';
        document.getElementById('licence').style.display = 'none';
        document.getElementById('BAC2').style.display = 'none';
        document.getElementById('formation_continue').style.display = 'none';
        document.getElementById('BAC').style.display = 'block';
        document.getElementById('CAP').style.display = 'none';
        document.getElementById('BEP').style.display = 'none';
    }
    if (diplome == "bac+2") {
        document.getElementById('autre_diplome').style.display = 'none';
        document.getElementById('master1').style.display = 'none';
        document.getElementById('master2').style.display = 'none';
        document.getElementById('licence').style.display = 'none';
        document.getElementById('formation_continue').style.display = 'none';
        document.getElementById('BAC2').style.display = 'block';
        document.getElementById('BAC').style.display = 'none';
        document.getElementById('CAP').style.display = 'none';
        document.getElementById('BEP').style.display = 'none';
    }
    if (diplome == "licence") {
        document.getElementById('autre_diplome').style.display = 'none';
        document.getElementById('master1').style.display = 'none';
        document.getElementById('master2').style.display = 'none';
        document.getElementById('licence').style.display = 'block';
        document.getElementById('formation_continue').style.display = 'none';
        document.getElementById('BAC2').style.display = 'none';
        document.getElementById('BAC').style.display = 'none';
        document.getElementById('CAP').style.display = 'none';
        document.getElementById('BEP').style.display = 'none';
    }
    if (diplome == "master1") {
        document.getElementById('autre_diplome').style.display = 'none';
        document.getElementById('master1').style.display = 'block';
        document.getElementById('formation_continue').style.display = 'none';
        document.getElementById('master2').style.display = 'none';
        document.getElementById('licence').style.display = 'none';
        document.getElementById('BAC2').style.display = 'none';
        document.getElementById('BAC').style.display = 'none';
        document.getElementById('CAP').style.display = 'none';
        document.getElementById('BEP').style.display = 'none';
    }
    if (diplome == "master2") {
        document.getElementById('autre_diplome').style.display = 'none';
        document.getElementById('master1').style.display = 'none';
        document.getElementById('master2').style.display = 'block';
        document.getElementById('licence').style.display = 'none';
        document.getElementById('formation_continue').style.display = 'none';
        document.getElementById('BAC2').style.display = 'none';
        document.getElementById('BAC').style.display = 'none';
        document.getElementById('CAP').style.display = 'none';
        document.getElementById('BEP').style.display = 'none';
    }
    if (diplome == "autre") {
        document.getElementById('autre_diplome').style.display = 'block';
        document.getElementById('master1').style.display = 'none';
        document.getElementById('master2').style.display = 'none';
        document.getElementById('formation_continue').style.display = 'none';
        document.getElementById('licence').style.display = 'none';
        document.getElementById('BAC2').style.display = 'none';
        document.getElementById('BAC').style.display = 'none';
        document.getElementById('CAP').style.display = 'none';
        document.getElementById('BEP').style.display = 'none';
    }
    if (diplome == "form_continue") {
        document.getElementById('formation_continue').style.display = 'block';
        document.getElementById('autre_diplome').style.display = 'none';
        document.getElementById('master1').style.display = 'none';
        document.getElementById('master2').style.display = 'none';
        document.getElementById('licence').style.display = 'none';
        document.getElementById('BAC2').style.display = 'none';
        document.getElementById('BAC').style.display = 'none';
        document.getElementById('CAP').style.display = 'none';
        document.getElementById('BEP').style.display = 'none';
    }
    if (diplome == "aucun") {
        document.getElementById('formation_continue').style.display = 'none';
        document.getElementById('autre_diplome').style.display = 'none';
        document.getElementById('master1').style.display = 'none';
        document.getElementById('master2').style.display = 'none';
        document.getElementById('licence').style.display = 'none';
        document.getElementById('BAC2').style.display = 'none';
        document.getElementById('BAC').style.display = 'none';
        document.getElementById('CAP').style.display = 'none';
        document.getElementById('BEP').style.display = 'none';
    }
}

function hideshowreconv(val) {
    if (val == 1) {
        document.getElementById('div_reconv').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_form_prevu').style.display = 'none';
        document.getElementById('div_reconv').style.display = 'none';
    }
}

function hideshowformprevu(val) {
    if (val == 1) {
        document.getElementById('div_form_prevu').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_form_prevu').style.display = 'none';
    }
}

function hideshowreprise(val) {
    if (val == 1) {
        document.getElementById('div_reprise').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_reprise').style.display = 'none';
    }
}

function hideshowformpro(val) {
    if (val == 1) {
        document.getElementById('div_form_pro').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_form_pro').style.display = 'none';
        document.getElementById('diplomante').style.display = 'none';
        document.getElementById('qualifiante').style.display = 'none';
    }
}

function hideshowtypeform() {
    var typeform = document.getElementById("type_form").value;
    if (typeform == "aucun") {
      document.getElementById('diplomante').style.display = 'none';
      document.getElementById('qualifiante').style.display = 'none';
    }
    if (typeform == "diplomante") {
        document.getEl;
      document.getElementById('qualifiante').style.display = 'none';
      document.getElementById('diplomante').style.display = 'block';
    } 
    if (typeform == "qualifiante") {
      document.getElementById('diplomante').style.display = 'none';
      document.getElementById('qualifiante').style.display = 'block';
    } 
  }

  function hideshowlogiciel(val) {
    if (val == 1) {
        document.getElementById('div_logiciel').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_logiciel').style.display = 'none';
}


}

  function hideshowlangue(val) {
    if (val == 1) {
        document.getElementById('div_langue').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_langue').style.display = 'none';
    }
}

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
        hideshowdiplome(getValueByIdPrefix('oui_diplome'));
        hideshowasile(getValueByIdPrefix('oui_demande_asile'));
        hideshowpolitique(getValueByIdPrefix('oui_refugie_politique'));
        hideshowfrance(getValueByIdPrefix('oui_pole_emplois'));
        hideshowsoelis(getValueByIdPrefix('oui_soelis'));
        hideshowcma(getValueByIdPrefix('oui_cma'));
        hideshowmission(getValueByIdPrefix('oui_mission_locale'));
        hideshowcap(getValueByIdPrefix('oui_cap_emploi'));
        hideshowcv(getValueByIdPrefix('oui_cv'));  // Ajout de cette ligne
        hideshowcv(getValueByIdPrefix('non_cv'));  // Ajout de cette ligne
        hideshowpermis(getValueByIdPrefix('oui_permis'));
        hideshowvehiculedispo(getValueByIdPrefix('non_vehicule'));
        hideshowvehiculedispo(getValueByIdPrefix('oui_vehicule'));
        hideshowvehiculeprevu(getValueByIdPrefix('oui_achat'));
        hideshowvehiculeprevu(getValueByIdPrefix('non_achat'));
        hideshowreconv(getValueByIdPrefix('oui_reconv'));
        hideshowformprevu(getValueByIdPrefix('oui_prevue'));
        // ... (le reste de votre code)
    
        // Appeler chaque fonction avec les valeurs initiales des champs select
        hideshowtypeform(getValueById('type_form'));
        hideshowpermischoix(getValueById('choix_permis'));
        hideshowdiplomechoix(getValueById('diplome_1'));
    }
    

    // Vous pouvez également attacher la fonction initialSetup à des événements de changement
    // des radio/checkbox au cas où l'utilisateur cocherait/décocherait ultérieurement.
    // Par exemple, si vous avez des éléments radio/checkbox avec la classe "toggle-option":
    const toggleOptions = document.querySelectorAll('.toggle-option');
    toggleOptions.forEach(function(option) {
        option.addEventListener('change', initialSetup);
    });

    // Attacher la fonction initialSetup à des événements de changement pour les champs select
    const selectElements = document.querySelectorAll('select');
    selectElements.forEach(function(select) {
        select.addEventListener('change', initialSetup);
    });

    // Attacher la fonction initialSetup à des événements de changement pour les champs input
    const inputElements = document.querySelectorAll('input');
    inputElements.forEach(function(input) {
        input.addEventListener('input', initialSetup);
    });
});

/**DIPLOMES */
function hideshowdiplome(val) {
if (val == 1) {
    document.getElementById('diplomes_container').style.display = 'block';
    document.getElementById('hr_diplome').style.display = 'none';
    document.getElementById('diplome_non').style.display = 'none';
}
if (val == 2) {
    document.getElementById('diplomes_container').style.display = 'none';
    document.getElementById('hr_diplome').style.display = 'block';
    document.getElementById('diplome_non').style.display = 'block';
}
}

document.addEventListener("DOMContentLoaded", function() {
var nb_diplome = parseInt(document.getElementById("inputnb_diplome").value); // Compteur pour suivre le nombre de clics
var diplomesContainer = document.getElementById("diplomes_container");
for(i=1;i<=nb_diplome;i++){
        var select = document.getElementById("diplome_"+i);
        select.addEventListener('change', function() {
        var diplomeIndex = parseInt(this.id.split('_')[1], 10);
        var selectedDiplome = this.value;
        createResponseFields(diplomeIndex, selectedDiplome);
    });
    }
document.getElementById("genererDiplome").addEventListener("click", function(event) {
    event.preventDefault();
    generateDiplome();
});

document.getElementById("supprimerDiplome").addEventListener("click", function(event) {
    event.preventDefault();
    deleteDiplome();
});

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

function generateDiplome() {
    nb_diplome += 1; // Incrémente le compteur
    
    var newDiplomeDiv = document.createElement('div');
    newDiplomeDiv.className = 'diplome';
    newDiplomeDiv.setAttribute("name", "div_diplome"+ nb_diplome);
    newDiplomeDiv.setAttribute("id", "div_diplome"+ nb_diplome);

    var label = document.createElement('div');
    label.className = 'label';
    label.innerHTML = 'Type de diplôme ' + nb_diplome;
    newDiplomeDiv.appendChild(label);

    var select = document.createElement('select');
    select.name = 'nom_diplome_' + nb_diplome;
    select.id = 'diplome_' + nb_diplome;
    
    // Ajouter les options au select
    var options = ["Choisir un diplôme", "Brevet", "CAP", "BEP", "BAC", "BAC+2", "Licence", "Master1", "Master2", "Autre", "Formation continue"];
    for (var j = 0; j < options.length; j++) {
        var option = document.createElement('option');
        option.value = options[j].toLowerCase();
        option.text = options[j];
        select.appendChild(option);
    }

    newDiplomeDiv.appendChild(select);
    diplomesContainer.appendChild(newDiplomeDiv);
    inputnb_diplome.value = nb_diplome;
    // Créer le conteneur pour les réponses
    var responseContainer = document.createElement('div');
        responseContainer.id = 'responses_container_' + nb_diplome;
        newDiplomeDiv.appendChild(responseContainer);

        // Ajouter un écouteur d'événements sur le changement de type de diplôme
        select.addEventListener('change', function () {
            var diplomeIndex = parseInt(this.id.split('_')[1], 10);
            var selectedDiplome = this.value;
            createResponseFields(diplomeIndex, selectedDiplome);
        });
        var hr = document.createElement("hr");
        hr.setAttribute("class", "dashed");
        newDiplomeDiv.appendChild(hr);
}
function deleteDiplome(){
    // Récupérer la div à supprimer par son nom
    var divDiplome = document.getElementById("div_diplome"+ nb_diplome);
    // Supprimer la div
    divDiplome.remove();
    nb_diplome -= 1; // Incrémente le compteur pour les prochains clics
    inputnb_diplome.value = nb_diplome;
}
});
// Fonction pour créer les champs de réponse en fonction du type de diplôme sélectionné
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
        case 'master1':
        case 'master2':
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
                       