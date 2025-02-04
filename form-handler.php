<?php
session_start();

$roles = file_exists('./role.txt') ? file('./role.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];


$errors = [];
$success = false;
$lastname = $firstname = $email = $description = '';
$selected_roles = [];
$password = $confirm_password = '';
$users = file_exists('utilisateur.txt') ? file('utilisateur.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];
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
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lastname = htmlspecialchars($_POST['lastname'] ?? '');
    $firstname = htmlspecialchars($_POST['firstname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $selected_roles = $_POST['roles'] ?? [];
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (!$lastname)
        $errors['lastname'] = "Le champ 'Nom' est obligatoire.";
    if (!$firstname)
        $errors['firstname'] = "Le champ 'Prénom' est obligatoire.";
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors['email'] = "Une adresse email valide est obligatoire.";
    if (empty($selected_roles) || count($selected_roles) < 2 || count($selected_roles) > 4) {
        $errors['roles'] = "Vous devez sélectionner entre 2 et 4 activités.";
    }
    if (!$password)
        $errors['password'] = "Le champ 'Mot de passe' est obligatoire.";
    if (!$confirm_password)
        $errors['confirm_password'] = "Le champ 'Confirmation du mot de passe' est obligatoire.";
    if ($password !== $confirm_password)
        $errors['password_mismatch'] = "Les mots de passe ne correspondent pas.";

    if (emailExists($email)) {
        $errors['email_exists'] = "Une erreur est survenue : cet email est déjà utilisé.";
        $email = '';
        $password = $confirm_password = '';
    }

    if (empty($_POST['consent'])) {
        $errors['consent'] = "Vous devez accepter le traitement de vos données.";
    }

    if (empty($errors)) {
        $data = implode(';', [
            $lastname,
            $firstname,
            implode(',', $selected_roles)
        ]);
        file_put_contents('utilisateur.txt', $data . PHP_EOL, FILE_APPEND);

        $_SESSION['success'] = "Bienvenue sur le site $firstname $lastname.";
        header('Location: profil.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="POST">
        <h1>Formulaire d'inscription</h1>
        <?php if (!empty($errors)): ?>
            <div class="errors">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname" value="<?= htmlspecialchars($lastname) ?>" required>

        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" value="<?= htmlspecialchars($firstname) ?>" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>

        <label for="roles">Rôles :</label>
        <div class="roles-group">
            <?php foreach ($roles as $role): ?>
                <label class="role-option">
                    <input type="checkbox" name="roles[]" value="<?= htmlspecialchars($role) ?>"
                        <?= in_array($role, $selected_roles) ? 'checked' : '' ?>>
                    <span><?= htmlspecialchars($role) ?></span>
                </label>
            <?php endforeach; ?>
        </div>



        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <label for="consent">
            <input type="checkbox" id="consent" name="consent" required>
            J'accepte le traitement et l'enregistrement de mes données pour un usage interne au site internet et à but
            non commercial.
        </label>

        <button type="submit">S'inscrire</button>
    </form>
</body>

</html>
