<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - QUIZZEO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            margin: 50px auto;
            width: 50%;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-top: 30px;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"], input[type="password"], select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .captcha {
            margin: 25px 0;
        }
        button {
            background-color: #0000FF; /* Bleu */
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0033cc;
        }
        .error {
            color: red;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inscription à QUIZZEO</h1>
        <form action="register_handler.php" method="POST">
            <label for="register-username">Nom d'utilisateur :</label>
            <input type="text" id="register-username" name="username" required>

            <label for="register-password">Mot de passe :</label>
            <input type="password" id="register-password" name="password" required>

            <label for="register-confirm-password">Confirmer le mot de passe :</label>
            <input type="password" id="register-confirm-password" name="confirm_password" required>

            <label for="register-role">Rôle :</label>
            <select id="register-role" name="role" required>
                <option value="">Sélectionnez un rôle</option>
                <option value="admin">Administrateur</option>
                <option value="editor">Éditeur</option>
                <option value="viewer">Visiteur</option>
            </select>

            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>
