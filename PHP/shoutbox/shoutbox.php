<?php

    $user1 = "François";
    $user2 = "Einstein";


//récupérer les données du pseudo
  if( isset($_POST['pseudo']) && $_POST['pseudo']!=""){
      if($_POST['pseudo'] == $user1){
          session_start();
    // $_SESSION['user'] = $_POST['pseudo'];
          echo "Successuser1";
      }
      else if($_POST['pseudo'] == $user2){
          session_start();
    // $_SESSION['user'] = $_POST['pseudo'];
          echo "Successuser2";
      }
    }



  else{
      echo "Failed";
  }





 ?>
