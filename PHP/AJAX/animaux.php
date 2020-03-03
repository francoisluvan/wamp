
<?PHP



  $login_normal = "user";
	$login_admin = "admin";
	$password = "ajax";

    if( isset($_POST['login']) && isset($_POST['password']) ){

        if($_POST['login'] == $login_normal && $_POST['password'] == $password){
            session_start();
            $_SESSION['user'] = $login_normal;
            echo "Successuser";
        }
else if ($_POST['login'] == $login_admin && $_POST['password'] == $password){
            session_start();
            $_SESSION['user'] = $login_admin;
            echo "Successadmin";
	}
        else{
            echo "Failed";
        }
    }

/*
$identifiant = $_POST['identifiant'];
$password = $_POST['password'];

if (isset($_POST['identifiant']) AND $_POST['password'] =="kangourou")
  {echo 'Bienvenue dans votre session.';}
else
  {echo 'Le mot de passe est erroné. <br> Indice : le mot de passe est kangourou';}
  */


?>
