<?php 
    require('admin.php');
    $i = 0;

    $id = $_GET['id'];
    $status = $_GET['status'];

    $requete = $bdd->prepare("UPDATE users SET status = ? WHERE id_user = ?");
    $requete->execute(array($status,$id));

    //header("Location: admin.php");

        echo "<script>
                setTimeout(function() {
                    window.location.href = 'admin.php';
                }, 0); // Recharge après 500 ms
              </script>";


              
?>