<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer les données du formulaire

    $prenom = $_POST['prenom'];

    $nom = $_POST['nom'];

    $pseudo = $_POST['pseudo'];

    $email = $_POST['email'];

    $motdepasse = $_POST['motdepasse'];

    $confirmation = $_POST['confirmation'];



    // Valider les données (par exemple, vérifier que les mots de passe correspondent)

    if ($motdepasse !== $confirmation) {

        // Les mots de passe ne correspondent pas, rediriger avec un message d'erreur

        header("Location: index.html?erreur=Mots de passe non correspondants");

        exit;

    }



    // Si les données sont valides, vous pouvez les traiter ici (par exemple, les enregistrer dans une base de données)

    // Après traitement, rediriger vers la page d'accueil

    header("Location: accueil.html");

    exit;

} else {

    // Rediriger en cas d'accès direct à ce fichier sans soumission de formulaire

    header("Location: index.html");

    exit;

}

?>