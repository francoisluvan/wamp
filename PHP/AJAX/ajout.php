
<?PHP


    if( isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['pays'])){
      $tablo = array($_POST['nom'],$_POST['description'], $_POST['pays']);
      echo json_encode($tablo);
        }




?>
