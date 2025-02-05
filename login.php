<?php 

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=gestion_inf','root', '');


if (isset($_POST['valider'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        $pseudo_defaut = "root";
        $mdp_defaut = "gueule";

        // Éviter l'injection HTML
        $pseudo = htmlspecialchars($_POST['pseudo']); 
        $mdp = $_POST['mdp'];

        //reccupération d'une variable en session
        $_SESSION['mdp'] = $mdp;
    
        //var_dump($_SESSION['mdp']);

        // Vérifier si les identifiants sont corrects
        if ($pseudo_defaut == $pseudo && $mdp_defaut == $mdp) {
            header('Location: admin.php');
            exit(); //Arrêter l'exécution après la redirection
        } elseif($pseudo_defaut !== $pseudo && $mdp_defaut !== $mdp) {
            $pseudo = ($_POST['pseudo']);
            $password = ($_POST['mdp']);
            //echo "$password";
            $requete = $bdd->prepare("SELECT * FROM users WHERE username= ? AND  password= ? AND status = ?");
            $requete->execute(array($pseudo,$password,1));
            $cpt = $requete->rowCount();

            $requetesec = $bdd->prepare("SELECT * FROM users WHERE username= ? AND  password= ?");
            $requetesec->execute(array($pseudo,$password));
            $cptsec = $requetesec->rowCount();
            if($cpt === 1){
                echo $cpt;
                echo "Identifiant et mot de passe retrouvé";
            } elseif($cpt == 0 && $cptsec == 1) {
                header("Location: error.php");
                //exit();
                //echo "Page not found 404";
                $cpt = 0;
                $cptsec = 1;
            } else {
                echo "Votre identifiant ou mot de passe est incorrect.";
            }


        } else {
            echo "Votre identifiant ou mot de passe est incorrect.";
        }
    } else {
        echo "Erreur : remplissez tous les champs.";
    } 
}
?>




<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
</head>

<body>


   <form action="" method="post" align="center">
      <input type="text" name="pseudo">
      <br><br>
      <input type="password" name="mdp" id=""><br><br>
      <input type="submit" name="valider">

   </form>

</body>

</html>