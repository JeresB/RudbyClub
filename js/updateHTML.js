$(document).ready(function() {
  $(".modif").click(function(event) {
    var id = $(this).attr("id");
    id = id.substr(7);
    var textID = document.getElementById(id);
    var saveText = textID.innerText || textID.textContent;
    textID.innerHTML = '';

    var input = '';

    input += '<input id = "texte" name = "texte" type = "text" value = "' + saveText + '"></input>';

    textID.innerHTML = input;

    $('#texte').keyup(function(e) {
      if(e.keyCode == 13) { // KeyCode de la touche entrée
        var texte = $("#texte").val();

        textID.innerHTML = texte;

        console.log("Nouveau texte : " + texte);
      }
    });
    console.log("Sauvegarde du texte : " + saveText);
  });

});
