<?php
session_start(); //Démarons notre sésion merdique 

// Simulation de l'utilisateur connecté et de son rôle
$_SESSION['role'] = 'Entreprise'; // Changer cela selon l'authentification réelle de l'utilisateur

// On ne peut laisser tous le monde entée donc on vérifie si celui qui se connecte a le role entreprise
if ($_SESSION['role'] !== 'Entreprise') {
    echo "Accès refusé. Vous n'avez pas le bon rôle.";
}

// Exemple de données de quiz (ces données seraient normalement récupérées depuis une base de données)
$quizzes = [
    ['name' => 'Les mystéres de grégoire Sauvaigo', 'status' => 'Lancé', 'responses' => 20],
    ['name' => 'Echequier', 'status' => 'En cours d\'écriture', 'responses' => 4],
    ['name' => 'Les partiels ', 'status' => 'Terminé', 'responses' => 30]
];

// Générer la liste de quiz
foreach ($quizzes as $quiz) { //on va appeler un tableau($quizzes) qui contient des quizzes($quiz)
    echo "<tr>"; // crée une nouvelle ligne dans le tableau 
    echo "<td>" . $quiz['name'] . "</td>"; // afiche le nom du quiz
    echo "<td>" . $quiz['status'] . "</td>"; // affiche le status du quiz
    echo "<td>" . $quiz['responses'] . "</td>"; //affiche les réponses
    echo "<td><button onclick='QuizStatus(\"" . $quiz['name'] . "\")'>Activer/Désactiver</button></td>"; // crée un boutton qui permettra d'activer ou désactiver le quiz
    echo "</tr>";
    //quizstatus est une fonction javasript (avoir sur le fichier  script.js)
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Entreprise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur votre Dashboard</h1>
       <!-- ici il y'aura des liens pour aller sur différente page (page pour créer le quiz page pour se déconnecter page pour le tableau de bord) -->
            <ul> 
                <li><a href="#">Tableau de bord</a></li>
                <li><a href="quizz.html">Créer un quiz</a></li>
                <li><a href="#">Déconnexion</a></li>
            </ul>
    </header>

    <div class="dashboard">
        <h2>Liste des Quiz</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom du Quiz</th>
                    <th>Statut</th>
                    <th>Réponses</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="quizList">
                <!-- Les quiz seront insérés ici via PHP -->
            </tbody>
        </table>
    </div>

    <script src="script.js"></script>
</body>
</html>