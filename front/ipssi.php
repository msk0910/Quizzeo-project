<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F8F8FF;
            color: #333;
        }
        .container {
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }
        h1 {
            color: #ff3366;
            text-align: center;
            margin-top: 20px;
        }
        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .central-paragraph {
            background-color: #ffdfdf;
            padding: 15px;
            border-left: 5px solid #ff3366;
            margin-bottom: 20px;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .btn-primary, .btn-secondary {
            background-color: #ff3366;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s;
            margin: 5px;
        }
        .btn-primary:hover, .btn-secondary:hover {
            background-color: #ff004c;
        }
        .image-container {
            text-align: center;
            margin-top: 40px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .image-container img {
            width: 200px;
            height: auto;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>À propos de nous</h1>
        <p>Bienvenue sur notre site! Nous sommes un groupe d'étudiants dédié à fournir les meilleurs services à nos clients. Notre mission est de vous permettre de faciliter la création de vos questionnaires en développant des solutions innovantes répondant aux besoins de notre clientèle et améliorant la qualité de vie de nos clients.</p>
        <p class="central-paragraph">Fondé en 2025, notre groupe s'est engagé à l'excellence et à l'intégrité. Nous croyons en l'importance de l'innovation, de la collaboration et du service à la clientèle. Notre équipe est composée d'étudiants passionnés qui travaillent ensemble pour atteindre des objectifs communs.
        Nous nous efforçons de faire une différence positive dans le monde en développant des services durables et en soutenant diverses initiatives sociales et environnementales. Nous nous engageons à être transparents, responsables et à toujours mettre nos clients au centre de tout ce que nous faisons.</p>
        <p>Les fonds générés seront reversés à des associations qui luttent pour les pays en guerre. Nous faisons cela dans le but d'apporter notre pierre à l'édifice.</p>
        <div class="button-container">
            <a href="contact.php" class="btn-primary">Contactez-nous</a>
            <a href="acceuil.php" class="btn-secondary">Retour à l'accueil</a>
        </div>
        <div class="image-container">
            <img src="quizzeo.png" alt="Image 1">
            <img src="ipssi.png" alt="Image 2">
        </div>
    </div>
</body>
</html>
