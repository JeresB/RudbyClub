$( document ).ready(function() {
    var page = $.cookie('page');
    
    var titre = document.getElementById('titre');
    titre.innerHTML = page;
    
    titre = document.getElementById('titre-h1');
    titre.innerHTML = page;
    
    titre = document.getElementById('titre-li');
    titre.innerHTML = page;
    
    ajaxRequest('GET', 'php/request.php/module/equipe/loadEquipe', loadHtmlAndJs);
});