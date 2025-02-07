<?php 
	session_start();
    if(!$_SESSION['mdp']){
		header('Location: login.php');
	}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzeo - Dashboard École</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="logo-container">
                <img src="quizzeo.png" alt="Logo Quizzeo" class="logo">
            </div>
            <ul class="nav-links">
                <li><a href="acceuil.html">Accueil</a></li>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="dashboard">
            <h1>Tableau de bord - École</h1>
            <p>Bienvenue sur votre espace administrateur. Gérez vos quiz en toute simplicité.</p>
            <button class="btn-primary" onclick="location.href='ecole/quiz_form.php'">➕ Créer un nouveau Quiz</button>
            <h2>Vos Quiz</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nom du Quiz</th>
                        <th>Statut</th>
                        <th>Nombre de réponses</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Quiz de Mathématiques</td>
                        <td><span class="status status-en-cours">En cours d'écriture</span></td>
                        <td>5</td>
                        <td>
                            <a href="edit-quiz.html" class="btn-action">✏️ Modifier</a>
                            <a href="#" class="btn-action delete">🗑 Supprimer</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Quiz de Science</td>
                        <td><span class="status status-lance">Lancé</span></td>
                        <td>20</td>
                        <td>
                            <a href="view-results.html" class="btn-action">📊 Voir les résultats</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Quiz d'Histoire</td>
                        <td><span class="status status-termine">Terminé</span></td>
                        <td>30</td>
                        <td>
                            <a href="view-results.html" class="btn-action">📑 Voir les réponses</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Quizzeo. Tous droits réservés.</p>
    </footer>
</body>
</html>
