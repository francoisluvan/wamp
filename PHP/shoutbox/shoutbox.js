
//setInterval(function(){$('#shoutbox').load('message.php')}, 10000);

//connexion avec pseudo
$("#connexion").click(function(event){

 event.preventDefault();

  var donnees={ pseudo : $('#pseudo').val()};
//Début de mon ajax
    $.ajax({
      url:"shoutbox.php",
      type:"POST",
      data : donnees,
    }).done(function(arg){
     console.log(JSON.stringify(arg));

//success
        if(arg =="Successuser1"){
          var pseudo1 = $('#pseudo').val();

          if(typeof (document.getElementsByTagName("span")[0])!=="undefined"){

            for(var i=0; i<document.getElementsByClassName("mespan").length ; i++ ){
              if(document.getElementsByClassName("mespan")[i].textContent == pseudo1){

                  alert("Ce pseudo est déjà pris Banane!");

                }
              }
              }


                  var formcouleurs = ("<div class='choixcouleurs'><div> Couleur du pseudo : </div><label> Bleu  </label><input type='radio' id='bleu' name='couleurs' checked><label> Rouge  </label><input type='radio' id='rouge' name='couleurs'><label> Vert  </label><input type='radio' id='vert' name='couleurs'></div>");
                  $('.choixcouleurs').remove();
                  $("#form").append(formcouleurs);

                  $("#mesboutons, #tchat, #boutonefface, #bravo").remove();
                  $("#connexion").attr("value", "changer d'utilisateur");


                  $("#form").append('<p id="bravo">Bravo '+pseudo1+', vous êtes connecté</p>');
                  $("#madiv").append('<input id="mesboutons" class="boutons" type="button" value="Déconnexion" onclick=window.location.href="http://php/shoutbox/shoutbox.html">');
  //j'ajoute le tchat
                  $("#shoutbox").after("<form action='message.php' method='post' id='tchat' ><fieldset id ='fieldset2'><legend> Votre message ici : </legend><textarea  id='content' name='content'></textarea><input id='valider' class='boutons' type='submit' value='envoyer' name='text' onclick='envoyer()' /></fieldset></form>");
                  $("#shoutbox").after('<input id="boutonefface" class="boutons" type="button" value="Effacer tout" onclick="effacer()">');


      }
        else if(arg =='Successuser2'){
          var pseudo2 = $('#pseudo').val();
          if(typeof (document.getElementsByTagName("span")[0])!=="undefined"){

            for(var i=0; i<document.getElementsByClassName("mespan").length ; i++ ){
              if(document.getElementsByClassName("mespan")[i].textContent == pseudo2){
                  alert("Ce pseudo est déjà pris Banane 2!");

                }
              }
              }
                  var formcouleurs = ("<div class='choixcouleurs'><div> Couleur du pseudo : </div><label> Bleu  </label><input type='radio' id='bleu' name='couleurs' checked><label> Rouge  </label><input type='radio' id='rouge' name='couleurs'><label> Vert  </label><input type='radio' id='vert' name='couleurs'></div>");
                  $('.choixcouleurs').remove();
                  $("#form").append(formcouleurs);

                  $("#mesboutons, #tchat, #boutonefface, #bravo").remove();
                  $("#connexion").attr("value", "changer d'utilisateur");


                  $("#form").append('<p id="bravo">Bravo '+pseudo2+', vous êtes connecté</p>');
                  $("#madiv").append('<input id="mesboutons" class="boutons" type="button" value="Déconnexion" onclick=window.location.href="http://php/shoutbox/shoutbox.html">');
  //j'ajoute le tchat
                  $("#shoutbox").after("<form id='tchat' action='server.php' method='post' ><fieldset id ='fieldset2'><legend> Votre message ici : </legend><textarea name='content' id='content'></textarea><input id='valider' class='boutons' type='submit' value='envoyer' name='text' onclick='envoyer()' /></fieldset></form>");
                  $("#shoutbox").after('<input id="boutonefface" class="boutons" type="button" value="Effacer tout" onclick="effacer()">');


        }

        else {
          //alert("Tu dois rentrer un pseudo pour poster un message")
          $(".modal").show("slow").delay(4000).hide("slow");
        }
    });
});




//Fonction qui envoi les message dans le tchat
function envoyer(){
   event.preventDefault();
  var data={author : $('#author').val(), content : $('#content').val(), new_message : $('#new_message').val()};

  //Début de mon ajax
    $.ajax({
      url:"server.php",
      type:"POST",
      data : data,
    }).done(function(arg){
     console.log(JSON.stringify(arg));
alert(arg);
  //success
        if(arg){

                $("#nbspan").remove();
              var ladate=new Date();
              var date="<span id='date'>"+ ladate.getDate()+"/"+(ladate.getMonth()+1)+"/"+ladate.getFullYear()+" à " +ladate.getHours()+":"+ladate.getMinutes()+" </span>";
              var text = $('#content').val();
              var user =$('#pseudo').val();
              var txtpseudo = "<span  id='author' name='author'  class='mespan'>"+user+"</span>";

                $("#shoutbox").append('<p id="new_message" name="new_message" class="msg" style="display:none">'+txtpseudo+', '+date+' : '+text+'</p>');

                if ($('#bleu').prop("checked")){
                $(".mespan").last().attr('style',  'color:blue');
                }
                else if ($('#rouge').prop("checked")){
                $(".mespan").last().attr('style',  'color:red');
                }
                else if ($('#vert').prop("checked")){
                $(".mespan").last().attr('style',  'color:green');
                }

                $(".msg").appendTo("#shoutbox").show('slow');
              var span = shoutbox.getElementsByTagName("span");
              var nbspan = span.length/2;
                $("#shoutbox").after('<div id="nbspan" type="button"> Il y a '+nbspan+' messages dans le tchat </div>');


        }

    });
  }


  function effacer(){
    $("#nbspan").remove();
    $(".msg").remove();
  }


/* Indications pour actualisation toutes les 5 sec.*/
function initialiser(evt) {
  poll()
}

function poll(){
  $.ajax('server.php',{
    method: "POST",
    data : 
  }).done(update);
}

function update(data){
  //...
  setTimeout(poll,5000);
}
