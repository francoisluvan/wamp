
//EXERCICE JSON du tableau animaux
imgtigre = "<img class='imganimal'  src='tigre.jpg' alt='photo tigre'/>";
imgelephant = "<img class='imganimal'  src='elephant.jpg' alt='photo elephant'/>";
imgleopard = "<img class='imganimal'  src='leopard.jpg' alt='photo leopard'/>";
imglion = "<img class='imganimal'  src='lion.jpg' alt='photo leopard'/>";
input = "<input type='submit' value='voir'>";

var ligne = '{ "animal" : [' + '{"nom":"tigre" , "img":"'+imgtigre+'", "description" : "Tigrou a 2 ans" , "pays":"Bengale" , "input":"'+input+'"},' + '{"nom":"elephant" , "img":"'+imgelephant+'", "description" : "Un élephant ça trompe énormement" , "pays":"Kenya" , "input":"'+input+'"},' + '{"nom":"leopard" , "img":"'+imgleopard+'", "description" : "léopard-ci léopard-là" , "pays":"Afrique du Sud" , "input":"'+input+'"}, ' + '{"nom":"lion" , "img":"'+imglion+'", "description" : "Le roi de la savane" , "pays":"Tanzanie" , "input":"'+input+'"} ]}';


// Ajoute les widget avec les animaux
var tablanimo = JSON.parse(ligne);

function tablo(){

  for (var i=0; i<tablanimo.animal.length ; i++ ){
    var banane =$("<div class='spaghetti'>");
    var id = i;
    banane.attr({id:id});
    $('#table').append(banane);
    $('#'+id).append("<br><div class='patate'>"+ tablanimo.animal[i].nom+"</div>");
    $('#'+id).append("<div class='patate'>"+ tablanimo.animal[i].img+"</div>");
    $('#'+id).append("<div class='patate'>"+ tablanimo.animal[i].description+"</div>");
    $('#'+id).append("<div class='patate'>"+ tablanimo.animal[i].pays+"</div><br>");
  }
}



//Fontions pour vérifier les champs du formulaire
  function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

//Vérifie que le texte dans le formulaire a entre 2 et 12 caractères
  function verifId(champ){
     if(champ.value.length < 2 || champ.value.length > 12)
     {
        surligne(champ, true);
        alert('Identifiant ou mot de passe incorrect. Entrez entre 2 et 12 caractères.');
     }
     else
     {
        surligne(champ, false);
        return true;
     }
  }



//Fonction qui cache mon modal quand je clique sur "se connecter"

//Quand je clique sur "se connecter", début de la fonction de connexion à Ajax
  $("#connexion").click(function(event){

   event.preventDefault();
    var identifiant={ login : $('#identifiant').val(), password: $('#password').val()};


//Début de mon ajax
      $.ajax({
        url:"animaux.php",
        type:"POST",
        data : identifiant,
      }).done(function(arg){

        console.log(JSON.stringify (arg));
//connexion en admin
          if(arg =="\r\nSuccessadmin"){
                  $("form").append('<p>Bravo, vous êtes connecté en tant que admin</p>');
                  $("form").append('<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>');
//bouton modifier
                  $(".spaghetti").append('<button class="boutonmodif" type="button1" onclick="modifier(this);"> Modifier</button>');
              /* met un id aux boutons
              var buttons = document.getElementsByClassName("boutonmodif");
                    for (var i=0; i<buttons.length; i++){
                      var numid = "boutonmodif" + i;
                      buttons[i].setAttribute("id", numid);
                    }
              */

//bouton supprimer
                  $(".spaghetti").append('<button class="boutonsuppr" type="button" onclick="supprimer(this);" > Supprimer</button><br><br>');

//bouton ajouter
                  $("body").append('<button id="boutonajout" type="button" onclick="ajouter(this)";>Ajouter un animal</button><br><br>');
                  $("#connexion").remove();
                  document.getElementById("bouton1").setAttribute("value", "connecté en admin");
                  $("h1").before('<button type="button" onclick=window.location.href="http://php/AJAX/animaux.html">Déconnexion</button>');
          }

//connexion en user
          if(arg =="\r\nSuccessuser"){
            $("form").append('<p>Bravo, vous êtes connecté en tant que user</p>');
            $("form").append('<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>');
            $(".spaghetti").after('<button type="button" onclick="zoom()"> Découvrir</button>');
            document.getElementById("bouton1").setAttribute("value", "connecté en user");
            document.getElementById("connexion").remove();
            $("h1").before('<button type="button" onclick=window.location.href="http://php/AJAX/animaux.html">Déconnexion</button>');
          }
   });
   });

  function zoom(bouton){
    $("#0").animate({ height:"+="+500, width:"+="+500 }, 1000 );
//faudra mettre les div en %
  }


   function supprimer(bouton){
     var monid = $(bouton).parent().attr('id');
     monid=parseInt(monid);
     tablanimo.animal.splice(monid, 1);
     $(bouton).parent().remove();
     $('#table').empty();
     tablo();
     $(".spaghetti").append('<button class="boutonmodif" type="button1" onclick="modifier(this);"> Modifier</button>');
     $(".spaghetti").append('<button class="boutonsuppr" type="button" onclick="supprimer(this);" > Supprimer</button><br><br>');
  }

  /*
  function sauvegarder(bouton){
    event.preventDefault();
    var nom = $('#nom').val();
    var description = $('#description').val();
    var pays = $('#pays').val();
    alert(nom)}
*/


  function modifier(bouton){
        $(bouton).parent().append("<form id='modiform' > <div id='jeveuxlenleverapres' class='row'> <input class='champ col-md-4' type='text' id='nom' placeholder='nom' name='nom'><input class='champ col-md-4' type='text' id='description' placeholder='description' name='description'><input class='champ col-md-4' type='text' id='pays' placeholder='pays' name='pays'> <input id='modifie' onclick='pousse(this)' type='submit' value='sauvegarder' name='sauvegarder'></div> </form>");
        $(bouton).attr({disabled:true});

    }


function pousse(bouton){

   event.preventDefault();
    var donnees={ nom : $('#nom').val(), description : $('#description').val(), pays : $('#pays').val(),};


  //Début de mon ajax
      $.ajax({
        url:"modifier.php",
        type:"POST",
        data : donnees,
        }).done(function(donnees){
          var coco=JSON.parse(donnees);

          var monid = $(bouton).parent().parent().parent().attr('id');
          tablanimo.animal[monid].nom = coco[0];
          tablanimo.animal[monid].description = coco[1];
          tablanimo.animal[monid].pays = coco[2];
          $('#table').empty();
          tablo();
          $(".spaghetti").append('<button class="boutonmodif" type="button1" onclick="modifier(this);"> Modifier</button>');
          $(".spaghetti").append('<button class="boutonsuppr" type="button" onclick="supprimer(this);" > Supprimer</button><br><br>');
        })
        }






  function ajouter(bouton){

    $(bouton).append("<form id='modiform' > <div id='jeveuxlenleverapres' class='row'> <input class='champ col-md-4' type='text' id='nom' placeholder='nom' name='nom'><input class='champ col-md-4' type='text' id='description' placeholder='description' name='description'><input class='champ col-md-4' type='text' id='pays' placeholder='pays' name='pays'> <input id='modifie' onclick='ajoutabl(this)' type='submit' value='confirm ajout' name='confirm ajout'></div> </form>");
    $(bouton).attr({disabled:true});
//utiliser push
  }


  function ajoutabl(bouton){
    event.preventDefault();
     var ajout={ nom : $('#nom').val(), description : $('#description').val(), pays : $('#pays').val(),};


   //Début de mon ajax
       $.ajax({
         url:"ajout.php",
         type:"POST",
         data : ajout,
       }).done(function(ajout){
           var papaye=JSON.parse(ajout);
           var ananas = new Object();
           ananas.nom = papaye[0];
           ananas.description = papaye[1];
           ananas.pays = papaye[2];
           ananas.img=" "
           tablanimo.animal.push(ananas);

           $('#table').empty();
           tablo();
           $(".spaghetti").append('<button class="boutonmodif" type="button1" onclick="modifier(this);"> Modifier</button>');
           $(".spaghetti").append('<button class="boutonsuppr" type="button" onclick="supprimer(this);" > Supprimer</button><br><br>');
         })
         $(bouton).parent().remove();
         $('#boutonajout').attr({disabled:false});

  }




/*
      var boutonsuppr = document.getElementsByClassName("boutonsuppr")
        for (var i=0; i<boutonsuppr.length; i++){
          var spaghetti = document.getElementsByClassName("spaghetti");
            for (var i=0; i<spaghetti.length; i++){
          document.getElementsById(ligne[i]).remove();
          }
        }
      }



  /*  var tablanimo = JSON.parse(ligne);
      for (var i=0; i<tablanimo.animal.length ; i++ ){
    delete tablanimo.animal[i].nom;
  }*/
    //ligne.splice();





/*
       success : function(code,statut){
          alert("ça marche"+statut);
        },
        error: function (code, statut,erreur){
          alert("y a une erreur"+statut+" erreur :"+erreur);
        },
        complete : function (code, statut){
          alert("on est complet");
        }

   }
 */
