


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Quiz | Quizzeo</title>
    <link rel="stylesheet" href="quiz_form.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <h1>📝 Créer votre Quiz</h1>
        <p>Complétez le formulaire ci-dessous pour ajouter vos questions et réponses.</p>

        <form action="../autres/enregistrer.php" method="POST">
            
            <div class="input-group">
                <label for="titre">📌 Titre du Quiz :</label>
                <input type="text" name="titre" id="titre" placeholder="Ex: Quiz de Culture Générale" required>
            </div>

            <div class="input-group">
                <label for="description">📝 Description :</label>
                <textarea name="description" id="description" placeholder="Ajoutez une courte description de votre quiz" required></textarea>
            </div>

            <div class="questions-container">
                <h2>📍 Ajoutez vos questions et réponses</h2>

                <div id="questions-list">
            
                </div>

                <button type="button" id="add-question">➕ Ajouter une question</button>
            </div>

            <button type="submit" class="btn-submit">🚀 Créer le Quiz</button>
        </form>
    </div>

    <script src="quiz_form.js"></script>

</body>
</html>
