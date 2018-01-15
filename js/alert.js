$( document ).ready(function() {
   
        console.log("Declenche l'alerte");
        var alerte = document.getElementById('alert');
        
        var texte = '<div class="alert alert-danger">Login ou mot de passe <strong>incorrect !</strong></div>';
        
        alerte.innerHTML = texte;

});