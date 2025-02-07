<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=gestion_inf','root', '');

// Génération du CAPTCHA
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$_SESSION['captcha_result'] = $num1 + $num2;
//Declaration des variables
$errors = [];
$success = false;
$lastname =  '';
$firstname =  '';
$email =  '';
$description = '';
$role = '';
$password =  '';
$confirm_password = '';


/*$users = file_exists('utilisateur.txt') ? file('utilisateur.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];
function emailExists($email)
{
    global $users;
    foreach ($users as $user) {
        $user_data = explode(';', $user);
        if (isset($user_data[2]) && $user_data[2] === $email) {
            return true;
        }
    }
    return false;
}*/

if (isset($_POST['valider'])) {
    $lastname = htmlspecialchars($_POST['lastname'] ?? '');
    $firstname = htmlspecialchars($_POST['firstname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $roles = $_POST['roles'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $captcha = $_POST['captcha'] ?? '';

    if (!$lastname)
        $errors['lastname'] = "Le champ 'Nom' est obligatoire.";
    if (!$firstname)
        $errors['firstname'] = "Le champ 'Prénom' est obligatoire.";
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors['email'] = "Une adresse email valide est obligatoire.";
    if (!$password)
        $errors['password'] = "Le champ 'Mot de passe' est obligatoire.";
    if (!$confirm_password)
        $errors['confirm_password'] = "Le champ 'Confirmation du mot de passe' est obligatoire.";
    if ($password !== $confirm_password)
        $errors['password_mismatch'] = "Les mots de passe ne correspondent pas.";

    if (empty($_POST['consent'])) {
        $errors['consent'] = "Vous devez accepter le traitement de vos données.";
    }

    if (!isset($_SESSION['captcha_result']) || $captcha != $_SESSION['captcha_result']) $errors['captcha'] = "Le CAPTCHA est incorrect.";

    if(($password == $confirm_password) && ($captcha != $_SESSION['captcha_result'])){
        $stmt = $bdd->prepare("INSERT INTO users (last_name, first_name, email, user_role, password) VALUES (?, ?, ?, ?, ?);");
        $stmt->execute([$lastname, $firstname, $email, $roles, $password]);

        header("Location: login.php");
    }
    
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="inscription.css">

</head>

<body>
    <form action="" method="POST" class="form">
        <h1>Formulaire d'inscription</h1>
        <?php if (!empty($errors)): ?>
            <div class="errors">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname" value="" required>

        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" value="" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="" required>

        <label for="roles">Rôle :</label>
        <select name="roles" id="roles" required>
            <option value="" selected hidden>-- Sélectionnez un rôle --</option>
            <option value="Ecole">Ecole</option>
            <option value="Entreprise">Entreprise</option>
            <option value="Utilisateur simple">Utilisateur simple</option>
        </select>



        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <!---Systeme de CAPTCHA------>
        <label for="captcha">Résolvez ce calcul pour prouver que vous êtes un humain :</label>
        <div class="sys_captcha">
            <span><?= $num1; ?> + <?= $num2; ?> =</span>
            <input type="number" id="captcha" name="captcha" required>
        </div>
        <?php if (isset($errors['captcha'])): ?>
            <p style="color: red;"> <?= $errors['captcha']; ?> </p>
        <?php endif; ?>

        <label for="consent">
            <input type="checkbox" id="consent" name="consent" required>
            <span>J'accepte le traitement et l'enregistrement de mes données pour un usage interne au site internet et à but
            non commercial.</span>
        </label>

        <input type="submit" id="submit" class="btn" name="valider" value="S'inscrire">
    </form>


    <script src="validation.js"></script>
</body>

</html>
