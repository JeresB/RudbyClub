$(".lien-equipe").unbind('click').click(function(event) {
    event.preventDefault();
    console.log("APPUIE SUR EQUIPE");
    $.cookie('page', event.target.id);
    document.location.href="equipe.php";
});