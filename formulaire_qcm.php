<!DOCTYPE html>
<html lang="fr">

<head>

  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>Créer votre quizz</title>

  <!--  Styles  -->



</head>
<body>
    <div> Bienvenue dans ce formulaire ici vous devrez entrer les questions ainsi que les bonnes et les mauvaises réponses</div>
    <form action="enregistrer.php" method="POST">
            <div class="titre"> 
                <h3>Entrer le titre du formulaire </h3>
                <input type="text" name="titre" placeholder="Entrer le titre">

                <h3>Entrer la description du QCM</h3>
                <textarea name="description" id=""></textarea>

                <h3>Entrer la Première question</h3>
                <input type="text" name="question1" placeholder="Entrer le titre">

                <h4>Ajouter les reponses</h4>
                <div class="reponse" id="reponse">
                    <h5 class="reponse1">Première réponse </h5>
                    <input type="text" name="reponse1_1" placeholder="Entrer le titre">
                    <h5 class="reponse2">Deuxième réponse</h5>
                    <input type="text" name="reponse1_2" placeholder="Entrer le titre">
                    <h5 class="reponse3">Troisiéme réponse</h5>
                    <input type="text" name="reponse1_3" placeholder="Entrer le titre">
                </div>
                <h3> Entrer la deuxiéme question</h3>
                <input type="text" name="question2" placeholder="Entrer le titre">


                <div class="reponse" id="reponse">
                    <h5 class="reponse2">Première réponse </h5>
                    <input type="text" name="reponse2_1" placeholder="Entrer le titre">
                    <h5 class="reponse2">Deuxième réponse</h5>
                    <input type="text"  name="reponse2_2" placeholder="Entrer le titre">
                    <h5 class="reponse3">Troisiéme réponse</h5>
                    <input type="text" name="reponse2_3" placeholder="Entrer le titre">
                </div>

                <h3> Entrer la troisiéme question</h3>
                <input type="text" name="question3" placeholder="Entrer le titre">

                <div class="reponse3" id="reponse">
                    <h5 class="reponse1">Première réponse </h5>
                    <input type="text"  name="reponse3_1" placeholder="Entrer le titre">
                    <h5 class="reponse2">Deuxième réponse</h5>
                    <input type="text"  name="reponse3_2" placeholder="Entrer le titre">
                    <h5 class="reponse3">Troisiéme réponse</h5>
                    <input type="text"  name="reponse3_3" placeholder="Entrer le titre">
                </div>

                <h3> Entrer la quatriéme question</h3>
                <input type="text" name="question4" placeholder="Entrer le titre">

                <div class="reponse" id="reponse">
                    <h5 class="reponse1">Première réponse </h5>
                    <input type="text"  name="reponse4_1" placeholder="Entrer le titre">
                    <h5 class="reponse2">Deuxième réponse</h5>
                    <input type="text" name="reponse4_2" placeholder="Entrer le titre">
                    <h5 class="reponse3">Troisiéme réponse</h5>
                    <input type="text" name="reponse4_3" placeholder="Entrer le titre">
                </div>

                <h3> Entrer la cinquiéme question</h3>
                <input type="text" name="question5" placeholder="Entrer le titre">
                <div>Ajouter les reponses</div>

                <div class="reponse" id="reponse">
                    <h5 class="reponse1">Première réponse </h5>
                    <input type="text" name="reponse5_1" placeholder="Entrer le titre">
                    <h5 class="reponse2">Deuxième réponse</h5>
                    <input type="text" name="reponse5_2" placeholder="Entrer le titre">
                    <h5 class="reponse3">Troisiéme réponse</h5>
                    <input type="text" name="reponse5_3" placeholder="Entrer le titre">
                </div>
                
                
            </div><br>
            <button type="submit" id="submit">Créer le quiz</button>
</form>
    </div>
    
</body>