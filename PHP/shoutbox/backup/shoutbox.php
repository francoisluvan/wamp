<?php



//récupérer les données du pseudo
  if( isset($_POST['pseudo']) && $_POST['pseudo']!="" ){
          session_start();
    // $_SESSION['user'] = $_POST['pseudo'];
          echo "Successuser";
      }
      else{
          echo "Failed";
      }

 ?>
