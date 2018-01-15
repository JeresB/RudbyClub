$(document).ready(function() {
  $.get( "getPhotos.php", function( data ) {
    var photo = JSON.parse(data)

    var photos = document.getElementById('listPhotos');
    photos.innerHTML = '';

    var text = '';

    for (var i = 0; i < photo.length; i++) {
        var div;
        var a;
        var image;
        var id = photo[i].id;
        var alt = photo[i].alt;
        var src = photo[i].src;

        div = document.createElement('div');
        div.className = 'col-xs-6 col-sm-4 col-md-3 col-lg-2';

        a = document.createElement('a');
        a.className = 'thumbnail';
        a.setAttribute("href", "#");
        a.setAttribute("id", "lien--" + id);
        a.setAttribute("alt", alt);
        a.setAttribute("src", src);
        console.log("ID de chaque image pos : " + i + " ID : " + id);

        image = document.createElement('img');
        image.setAttribute("id", "image-" + id);
        image.setAttribute("alt", alt);
        image.setAttribute("src", src);


        a.appendChild(image);

        div.appendChild(a);

        photos.appendChild(div);

        $("#lien--" + id).unbind('click').click(function (event) {
          event.preventDefault();
          var photoPrincipale = document.getElementById('bigPhoto');
          photoPrincipale.innerHTML = '<div class="col-md-12"><span class="thumbnail"><img alt="'+event.target.alt+'" src="'+event.target.src+'"></span></div>';
        });
      }
  });
});
