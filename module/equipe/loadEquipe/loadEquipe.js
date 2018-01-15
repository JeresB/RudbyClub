console.log("LoadEquipe.js");
var page = $.cookie('page');

if (decodeURIComponent(page) == 'Sénior A') {
    page = 'seniorA';
    //console.log("equipe = " + page);
}

if (decodeURIComponent(page) == 'Sénior B') {
    page = 'seniorB';
    //console.log("equipe = " + page);
}

if (decodeURIComponent(page) == 'Sénior C') {
    page = 'seniorC';
    //console.log("equipe = " + page);
}

ajaxRequest('GET', 'php/request.php/equipe/' + page, loadEquipe);

function loadEquipe(ajaxResponse) {
    var response = JSON.parse(ajaxResponse);
    
    var rdv = document.getElementById('rdv');
    rdv.innerHTML = response[0].rdv;
    
    var lieu_rdv = document.getElementById('lieu_rdv');
    lieu_rdv.innerHTML = response[0].lieu_rdv;
    
    var rencontre = document.getElementById('rencontre');
    rencontre.innerHTML = response[0].rencontre;
    
    var lieu_rencontre = document.getElementById('lieu_rencontre');
    lieu_rencontre.innerHTML = response[0].lieu_match;
    
    var image = document.getElementById('image');
    image.setAttribute('src', response[0].image);
    
    if (response[0].contre != null) {
        var contre = document.getElementById('contre');
        contre.innerHTML = "Contre : " + response[0].contre;
    }
}

ajaxRequest('GET', 'php/request.php/responsable/' + page, loadResponsables);

function loadResponsables(ajaxResponse) {
    var response = JSON.parse(ajaxResponse);
    
    var responsable = document.getElementById('responsables');
    var text = "";
    for (var i = 0; i < response.length; i++ ) {
        text += response[i].prenom_responsable + " " + response[i].nom_responsable + " : " + response[i].numero + "<br>";
    }
    
    responsable.innerHTML = text;
}

ajaxRequest('GET', 'php/request.php/membres/' + page, loadMembres);

function loadMembres(ajaxResponse) {
    var response = JSON.parse(ajaxResponse);
    
    var membre = document.getElementById('membre');
    var text = "";
    for (var i = 1; i < response.length; i++) {
        text += response[i].nom_membre + " " + response[i].prenom_membre;
    }
    
    membre.innerHTML = text;
}