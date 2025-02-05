<?php 

session_start();

if (isset($_POST['valider'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        $pseudo_defaut = "root";
        $mdp_defaut = "gueule";

        // Éviter l'injection HTML
        $pseudo = htmlspecialchars($_POST['pseudo']); 
        $mdp = $_POST['mdp'];

        $_SESSION['mdp'] = $mdp;
        
        // Debug : voir si le mot de passe est bien enregistré
        var_dump($_SESSION['mdp']);

        // Vérifier si les identifiants sont corrects
        if ($pseudo_defaut == $pseudo && $mdp_defaut == $mdp) {
            header('Location: admin.php');
            exit(); // IMPORTANT : Arrêter l'exécution après la redirection
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