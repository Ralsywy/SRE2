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

function hideshowasile(val) {
    if (val == 1) {
        document.getElementById('div_asile').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_asile').style.display = 'none';
    }
}

function hideshowpolitique(val) {
    if (val == 1) {
        document.getElementById('div_politique').style.display = 'block';
    }
    if (val == 2) {
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
        document.getElementById('div_vehicule_dispo').style.display = 'block';
    }
    if (val == 2) {
        document.getElementById('div_vehicule_prevu').style.display = 'none';
        document.getElementById('div_vehicule_dispo').style.display = 'none';
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

function hideshowdiplome() {
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
        document.getElementById('diplomante').style.display = 'block';
        document.getElementById('qualifiante').style.display = 'none';
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

