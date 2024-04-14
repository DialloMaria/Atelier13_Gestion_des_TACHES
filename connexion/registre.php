<?php
session_start();

// Vérification des identifiants lors de la soumission du formulaire
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification des identifiants (à remplacer par votre propre logique de validation)
    if($username === 'admin' && $password === 'password') {
        // Création de la session et stockage des informations de l'utilisateur
        $_SESSION['username'] = $username;

        // Redirection vers la page sécurisée
        header('Location: page_protegee.php');
        exit();
    } else {
        // Identifiants invalides, afficher un message d'erreur
        $error = "Identifiants invalides";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="form-box">
<form class="form">
    <span class="title">Sign up</span> <br>
    <span class="subtitle">Create a free account with your email.</span>
    <label for="Nom & Prenom">Nom & Prenom</label>
    <div class="form-container">
      <input type="text" name="nom" class="input" placeholder="Nom & Prenom">
    </div>
    <label for="email">Email</label>
    <div class="form-container">
			<input type="email" class="input" name="email" placeholder="Email">
    </div>
    <label for="password">Mot de Passe</label>
    <div class="form-container" >
			<input type="password" class="input" name="password" placeholder="Password">
    </div>
			<!-- <input type="email" class="input" placeholder="Email">
			<input type="password" class="input" placeholder="Password">
    </div> -->
    <button><a href="nexion.php">Sign up</a></button>
</form>
<div class="form-section">
  <p>Have an account? <a href="nexion.php">Log in</a> </p>
</div>
</div>
</body>
</html>