<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
 echo "Nos données dont soumit" ;
$mail = $_POST['mail'];
$password = $_POST['password'];

$sql = "SELECT * FROM client WHERE mail = '$mail', password ='$password'" ;
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
    <span class="title">Log in</span>
    <span class="subtitle"></span>
    <label for="email">Email</label>
    <div class="form-container">
			<input type="email" name="mail"  class="input" placeholder="Email">
    </div>
    <label for="password">Mot de Passe</label>
    <div class="form-container" >
			<input type="password" name="password" class="input" placeholder="Password">
    </div>
    <a href="accueil.php"><button name="submit">Se Connecter</button></a>
</form>
<div class="form-section">
  <p>Have not an account? <a href="registre.php">S'inscrire</a></p>
</div>
</div>
</body>
</html>