<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = $_POST['role'];

    // Vérification de la confirmation du mot de passe
    if ($password !== $confirm_password) {
        echo "Les mots de passe ne correspondent pas. Veuillez réessayer.";
        exit;
    }

    // Connexion à la base de données
    $conn = new mysqli('localhost', 'username', 'password', 'database');

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insertion des données
    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
