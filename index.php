<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - QUIZZEO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            margin: 50px auto;
            width: 80%;
            max-width: 800px;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .logo {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .logo img {
            max-width: 100%;
            height: auto;
        }
        nav {
            margin-bottom: 40px;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: #0000FF; /* Bleu */
            font-weight: bold;
        }
        h1 {
            color: #0000FF; /* Bleu */
        }
        p {
            color: #333;
        }
        .form-container {
            margin: 40px 0;
            text-align: left;
        }
        form {
            margin-top: 20px;
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        <div class="logo">
            <img src="quizzeo.png" alt="QUIZZEO Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>

                <li><a href="register.php">S'inscrire</a></li>
            </ul>
        </nav>
        <h1>Bienvenue sur QUIZZEO</h1>
        <p>Préparez-vous à tester vos connaissances avec des quiz amusants et instructifs !</p>

        <div class="form-container">
            <h2>Se connecter</h2>
            <form action="authenticate.php" method="POST">
                <label for="login-username">Nom d'utilisateur :</label>
                <input type="text" id="login-username" name="username" required>

                <label for="login-password">Mot de passe :</label>
                <input type="password" id="login-password" name="password" required>

                <div class="captcha">
                    <label for="login-captcha">Résolvez cette opération :</label>
                    <?php
                    $num1 = rand(1, 10);
                    $num2 = rand(1, 10);
                    echo "<b>$num1 + $num2 = ?</b>";
                    ?>
                    <input type="hidden" name="num1" value="<?php echo $num1; ?>">
                    <input type="hidden" name="num2" value="<?php echo $num2; ?>">
                    <input type="text" id="login-captcha" name="captcha" required>
                </div>

                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>
