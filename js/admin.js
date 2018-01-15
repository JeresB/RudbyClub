$( document ).ready(function() {
    $("#boutonAdmin").unbind('click').click(function() {
        $(location).attr("href", "login.php");
    });

    $("#annuler").unbind('click').click(function() {
        $(location).attr("href", "index.php");
    });
});
