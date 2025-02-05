<?php 
    require('quiz_admin.php');


    $id = $_GET['id'];
    $status = $_GET['status'];

    $requete = $bdd->prepare("UPDATE quiz SET status = ? WHERE id_quiz = ?");
    $requete->execute(array($status,$id));

    //header("Location: admin.php");

        echo "<script>
        setTimeout(function() {
            window.location.href = 'quiz_admin.php';
        }, 0); // Recharge après 0 ms
        </script>";
              
?>