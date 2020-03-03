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
        if(arg =="Successuser"){
          var pseudo = $('#pseudo').val();
                $("#form").append('<p>Bravo '+pseudo+', vous êtes connecté</p>');
                $("#connexion").remove();
                $("#madiv").append('<input class="boutons" type="button" value="Déconnexion" onclick=window.location.href="http://php/shoutbox/shoutbox.html">');
//j'ajoute le tchat
                $("#shoutbox").after("<form id='tchat' ><fieldset id ='fieldset2'><legend> Votre message ici : </legend><textarea  id='text'></textarea><input id='valider' class='boutons' type='submit' value='envoyer' name='text' onclick='envoyer()'' /></fieldset></form>");
                $("#shoutbox").after('<input class="boutons" type="button" value="Effacer tout" onclick="effacer()">');
        }
        else{
          alert("Tu dois rentrer un pseudo pour poster un message")
        }

    });
});





function envoyer(){
   event.preventDefault();
  var data={ text : $('#text').val()};

  //Début de mon ajax
    $.ajax({
      url:"message.php",
      type:"POST",
      data : data,
    }).done(function(arg){
     console.log(JSON.stringify(arg));
  //success
        if(arg =="textsuccess"){
          $("#nbspan").remove();
          var ladate=new Date();
          var date="<span id='date'>"+ ladate.getDate()+"/"+(ladate.getMonth()+1)+"/"+ladate.getFullYear()+" à " +ladate.getHours()+":"+ladate.getMinutes()+" </span>";
          var text = $('#text').val();
          var pseudo = "<span id='pseudo1'>"+$('#pseudo').val()+"</span>";
          $("#shoutbox").append('<p class="msg">'+pseudo+', '+date+' : '+text+'</p>');
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
