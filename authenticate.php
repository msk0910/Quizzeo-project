<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $captcha = $_POST['captcha'];

    // Vérification du CAPTCHA
    if ($captcha == $num1 + $num2) {
        // Exemple : Vérifier les informations de connexion (sans base de données)
        $valid_username = "admin";  // Nom d'utilisateur valide
        $valid_password = "password";  // Mot de passe valide

        // Vérification des informations de connexion
        if ($username == $valid_username && $password == $valid_password) {
            $_SESSION['loggedin'] = true;
            header('Location: index.php');
            exit;
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } else {
        echo "CAPTCHA incorrect, veuillez réessayer.";
    }
}
?>

