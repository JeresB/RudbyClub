var session = $.cookie('session');
console.log("session :" + session);

ajaxRequest('GET', 'php/request.php/news/', loadNews);

function loadNews(ajaxResponse) {
    var response = JSON.parse(ajaxResponse);

    var list = document.getElementById('listNews');
    list.innerHTML = "";
    
    for (var i = 0; i < response.length; i++) {
        
        // Date récupérer dans la BDD
        var temps = response[i].date;
        // On récupère chaque données de la date
        var date_explode = temps.split('-');
        // On formate la date
        var date_formater = format(date_explode[0], date_explode[1], date_explode[2]);
        
        var id    = response[i].id;
        var titre = response[i].titre;
        var image = response[i].image;
        var texte = response[i].texte;

        var div, panel, heading, supprimer, editer, b_titre, b_date, body, b_image, hr, b_texte;
        
        div = document.createElement('div');
        div.className = 'col-md-8 col-md-offset-2 col-xs-12';
        
        panel = document.createElement('div');
        panel.className = 'panel panel-default';
        
        heading = document.createElement('div');
        heading.className = 'panel-heading';
        
        console.log("session avant if : " + session);
        
        if (session == 'true') {
            supprimer = document.createElement('button');
            supprimer.className = 'btn btn-default pull-right';
            supprimer.setAttribute('id', "suppr-" + id);
            supprimer.innerHTML = '<i class="fa fa-trash-o" aria-hidden="true"></i>';
        
            editer = document.createElement('button');
            editer.className = 'btn btn-default pull-right';
            editer.setAttribute('id', "editer-" + id);
            editer.innerHTML = '<i class="fa fa-pencil" aria-hidden="true"></i>';
        }
        
        b_titre = document.createElement('h3');
        b_titre.innerHTML = titre;
        
        b_date = document.createElement('h5');
        b_date.innerHTML = date_formater;
        
        body = document.createElement('div');
        body.className = 'panel-body';
        
        b_image = document.createElement('img');
        b_image.className = 'img-responsive';
        b_image.setAttribute('src', image);
        
        hr = document.createElement('hr');
        
        b_texte = document.createElement('p');
        b_texte.innerHTML = texte;
        
        if(session == 'true') {
            heading.appendChild(supprimer);
            heading.appendChild(editer);
        }
        
        heading.appendChild(b_titre);
        heading.appendChild(b_date);
        body.appendChild(b_image);
        body.appendChild(hr);
        body.appendChild(b_texte);
        panel.appendChild(heading);
        panel.appendChild(body);
        div.appendChild(panel);
        list.appendChild(div);


        $("#suppr-" + id).unbind('click').click(function(event) {
            $.alert({
                title: 'Suppression !',
                content: 'L\'article vient d\'être supprimer !',
                type : 'red',
                typeAnimated: true,
            });
            
            
        });
   }
}