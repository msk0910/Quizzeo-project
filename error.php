<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur 404 - Accès refusé</title>
    <style>
        @keyframes shake {
            0%, 100% { transform: translate(0, 0); }
            10%, 90% { transform: translate(-2px, 2px); }
            20%, 80% { transform: translate(2px, -2px); }
            30%, 70% { transform: translate(-2px, -2px); }
            40%, 60% { transform: translate(2px, 2px); }
            50% { transform: translate(-2px, 2px); }
        }
        body {
            background: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            animation: shake 0.5s ease-in-out;
        }
        h1 {
            font-size: 80px;
            margin: 10px 0;
            text-shadow: 4px 4px 15px rgba(255, 0, 0, 0.7);
        }
        p {
            font-size: 22px;
            margin: 10px 0;
            color: #bbb;
        }
        .btn {
            background: #ff3333;
            color: #ffffff;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            border-radius: 10px;
            transition: background 0.3s, transform 0.5s;
            display: inline-block;
            box-shadow: 0px 0px 15px rgba(255, 0, 0, 0.5);
        }
        .btn:hover {
            background: #cc0000;
            transform: scale(1.1);
        }
        .image {
            width: 350px;
            height: auto;
            margin-bottom: 20px;
            filter: drop-shadow(0px 0px 10px rgba(161, 150, 150, 0.57));
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://cdn-icons-png.flaticon.com/512/4076/4076432.png" alt="Astronaute perdu" class="image">
        <h1>404</h1>
        <p>Désolé, la page que vous recherchez est introuvable.</p>
        <a href="login.php" class="btn">Retour à la page de connexion</a>
    </div>
</body>
</html>
