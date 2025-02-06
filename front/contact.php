<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F8F8FF;
            text-align: center;
            color: #333;
        }
        .contact-form {
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 400px;
            margin: 50px auto;
        }
        .contact-form h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #ff3366;
        }
        .contact-form label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }
        .contact-form input, .contact-form textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .contact-form input[type="submit"], .contact-form a {
            background-color: #ff3366;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
        .contact-form input[type="submit"]:hover, .contact-form a:hover {
            background-color: #ff004c;
        }
    </style>
</head>
<body>
    <div class="contact-form">
        <h1>Contactez-nous</h1>
        <form action="contact.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br>
            <label for="email">Adresse email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
            <input type="submit" value="Envoyer">
        </form>
        <a href="acceuil.php">Retour à l'accueil</a>
    </div>
</body>
</html>
