<?php
session_start();
if (!isset($_SESSION['success'])) {
    header('Location: inscription.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="profil.css">
</head>

<body>
    <div class="container">
        <h1><?= htmlspecialchars($_SESSION['success']); ?></h1>
        <p>Bienvenue dans votre page personnel. Ici vous trouverez les informations nécessaires concernant votre
            page.Sinon vous pouvez modifier les informations de votre formulaire</p>
        <a href="inscription.php" class="btn">Retour au formulaire</a>
    </div>
</body>

</html>