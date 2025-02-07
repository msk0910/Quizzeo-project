<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données envoyées par le formulaire
    $titre = isset($_POST['titre']) ? $_POST['titre'] : 'Non renseigné';
    $description = isset($_POST['description']) ? $_POST['description'] : 'Non renseignée';
    $questions = [
        'question1' => isset($_POST['question1']) ? $_POST['question1'] : 'Non renseignée',
        'question2' => isset($_POST['question2']) ? $_POST['question2'] : 'Non renseignée',
        'question3' => isset($_POST['question3']) ? $_POST['question3'] : 'Non renseignée',
        'question4' => isset($_POST['question4']) ? $_POST['question4'] : 'Non renseignée',
        'question5' => isset($_POST['question5']) ? $_POST['question5'] : 'Non renseignée',

    ];

    $reponses = [];
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 3; $j++) {
            $reponses["reponse{$i}_{$j}"] = isset($_POST["reponse{$i}_{$j}"]) ? $_POST["reponse{$i}_{$j}"] : 'Non renseignée';
        }
    }

    $content = "Titre: " . $titre . "\n" .
               "Description: " . $description . "\n\n";

    // Format de l'enregistrement des données
    foreach ($questions as $key => $question) {
        // Ajouter la question
        $content .= strtoupper(str_replace('question', 'Question', $key)) . ": " . $question . "\n";
        
        // Ajouter les réponses associées
        for ($i = 1; $i <= 3; $i++) {
            $reponseKey = "reponse" . substr($key, -1) . "_$i";  // Construction dynamique de la clé de réponse
            $content .= "Réponse $i: " . (isset($reponses[$reponseKey]) ? $reponses[$reponseKey] : 'Non renseignée') . "\n";
        }

        $content .= "\n";
    }


    // Enregistrement dans le fichier texte
    $file = 'formulaire.txt';
    file_put_contents($file, $content, FILE_APPEND);  // FILE_APPEND pour ajouter au fichier sans écraser les anciennes entrées

    // Confirmation de l'enregistrement
    echo "Les données ont été enregistrées avec succès!";
}
?>