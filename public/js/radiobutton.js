document.addEventListener("DOMContentLoaded", function() {
    //france travail
    if (document.getElementById('oui_france_travail').checked == true) {
        document.getElementById('div_france').style.display = 'block';
    }
    else{
        document.getElementById('div_france').style.display = 'none';
    }
    //demandeur d'asile et réfugié politique
    if (document.getElementById('oui_demande_asile').checked == true || document.getElementById('oui_refugie_politique').checked == true) {
        document.getElementById('div_politique').style.display = 'block';
    }
    else{
        document.getElementById('div_politique').style.display = 'none';
    }

    //soelis
    if (document.getElementById('oui_soelis').checked == true) {
        document.getElementById('div_soelis').style.display = 'block';
    }
    else{
        document.getElementById('div_soelis').style.display = 'none';
    }

    //cma
    if (document.getElementById('oui_cma').checked == true) {
        document.getElementById('div_cma').style.display = 'block';
    }
    else{
        document.getElementById('div_cma').style.display = 'none';
    }

    //mission_locale
    if (document.getElementById('oui_mission_locale').checked == true) {
        document.getElementById('div_mission').style.display = 'block';
    }
    else{
        document.getElementById('div_mission').style.display = 'none';
    }

    //cap emploi
    if (document.getElementById('oui_cap_emploi').checked == true) {
        document.getElementById('div_cap').style.display = 'block';
    }
    else{
        document.getElementById('div_cap').style.display = 'none';
    }

    //cv
    if (document.getElementById('oui_cv').checked == true) {
        document.getElementById('div_cv_oui').style.display = 'block';
    }
    else{
        document.getElementById('div_cv_oui').style.display = 'none';
    }

    //vehicule
    if (document.getElementById('non_vehicule').checked == true) {
        document.getElementById('div_vehicule_dispo').style.display = 'block';
    }
    else{
        document.getElementById('div_vehicule_dispo').style.display = 'none';
    }

    //permis
    if (document.getElementById('oui_permis').checked == true) {
        document.getElementById('div_permis').style.display = 'block';
    }
    else{
        document.getElementById('div_permis').style.display = 'none';
    }

    //diplome
    if (document.getElementById('oui_diplome').checked == true) {
        document.getElementById('diplomes_container').style.display = 'block';
    }
    else{
        document.getElementById('diplomes_container').style.display = 'none';
    }

    //reconversion pro
    if (document.getElementById('oui_reconv').checked == true) {
        document.getElementById('div_reconv').style.display = 'block';
    }
    else{
        document.getElementById('div_reconv').style.display = 'none';
    }

    //formation pro
    if (document.getElementById('oui_prevue').checked == true) {
        document.getElementById('div_form_prevu').style.display = 'block';
    }
    else{
        document.getElementById('div_form_prevu').style.display = 'none';
    }

    //reprise
    if (document.getElementById('oui_reprise').checked == true) {
        document.getElementById('div_reprise').style.display = 'block';
    }
    else{
        document.getElementById('div_reprise').style.display = 'none';
    }

    //oui_form_pro
    if (document.getElementById('oui_form_pro').checked == true) {
        document.getElementById('div_form_pro').style.display = 'block';
    }
    else{
        document.getElementById('div_form_pro').style.display = 'none';
    }

    //oui_logiciel
    if (document.getElementById('oui_logiciel').checked == true) {
        document.getElementById('div_logiciel').style.display = 'block';
    }
    else{
        document.getElementById('div_logiciel').style.display = 'none';
    }

    //oui_autre
    if (document.getElementById('oui_autre').checked == true) {
        document.getElementById('div_langue').style.display = 'block';
    }
    else{
        document.getElementById('div_langue').style.display = 'none';
    }

    //enfant
    if (document.getElementById('oui_enfant').checked == true) {
        document.getElementById('div_enfant').style.display = 'block';
    }
    else{
        document.getElementById('div_enfant').style.display = 'none';
    }
});