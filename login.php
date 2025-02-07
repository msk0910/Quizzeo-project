<?php 

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=gestion_inf','root', '');


if (isset($_POST['valider'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        $pseudo_defaut = "root@admin";
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
            $requete = $bdd->prepare("SELECT * FROM users WHERE email= ? AND  password= ? AND status = ?");
            $requete->execute(array($pseudo,$password,1));
            $cpt = $requete->rowCount();



            $requetesec = $bdd->prepare("SELECT * FROM users WHERE email= ? AND  password= ?");
            $requetesec->execute(array($pseudo,$password));
            $cptsec = $requetesec->rowCount();
            if($cpt === 1){ 
                $requete_auth = $bdd->prepare('SELECT user_role FROM users WHERE email = ? AND password = ?');
                $requete_auth->execute([$pseudo, $password]);
                $user = $requete_auth->fetch(PDO::FETCH_ASSOC);
                $_SESSION['password'] = $password;
                if($user['user_role'] == 'Ecole'){
                    header("Location: ecole_dash.php");
                }
                if($user['user_role'] == 'Entreprise'){
                    header("Location: entreprise/ent_dash.php");
                }
                if($user['user_role'] == 'Utilisateur Simple'){
                    //header("Location: ");
                }

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
    <title>Quizzeo - Connexion</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Connexion</h1>
            <p>Accédez à votre compte pour créer des quiz.</p>
            <form action="" method="POST">
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="pseudo" required>
                
                <label for="password">Mot de passe</label>
                <input type="password" name="mdp" id="" required>
                <input type="submit" class="btn-primary" name="valider">
            </form>
            <p><a href="#">Mot de passe oublié ?</a></p>
            <p>Pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
        </div>
    </div>

</body>
</html>
