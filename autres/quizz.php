<?php 
	session_start();
    if(!$_SESSION['mdp']){
		header('Location: login.php');
	}

?>


<!DOCTYPE html>
<html lang="fr">

<head>

  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>My New Pen!</title>

  <!--  Styles  -->
  <link rel="stylesheet" href="lib.css">
</head>

<body>

  <div>
    <ul> 
        <li><a href="entreprise.php">Tableau de bord</a></li>
        <li><a href="quizz.html">Créer un quiz</a></li>
        <li><a href="../logout.php">Déconnexion</a></li>
    </ul>
  </div>
  <div id="app-container">
    <div id="score-container">Score: 0</div>
    <h2 id="app-title">Quiz Application (Card edition)</h2>
    <div id="questions-container"></div>
  </div>





  <!-- Scripts -->
  <script src="lib.js"></script>
  <script src="main.js"></script>
</body>

</html>