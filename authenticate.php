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
        // Connexion à la base de données
        $conn = new mysqli('localhost', 'username', 'password', 'database');

        // Vérification de la connexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Préparer et exécuter la requête SQL
        $sql = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $sql->bind_param('ss', $username, $password);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['loggedin'] = true;
            header('Location: index.php');
            exit;
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }

        $sql->close();
        $conn->close();
    } else {
        echo "CAPTCHA incorrect, veuillez réessayer.";
    }
}
?>
