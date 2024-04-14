<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 require_once "config.php";
 require_once "Taches.php"
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Tâches</title>
    <style>
        /* Style pour la carte */
.card {
  margin-bottom: 20px;
  border: 1px solid #dee2e6; /* Couleur de la bordure */
  border-radius: 8px; /* Arrondi des coins */
}

/* Style pour le titre de la carte */
.card-title {
  color: #333; /* Couleur du texte */
  font-size: 1.2rem; /* Taille de la police */
}

/* Style pour le texte de la carte */
.card-text {
  color: #666; /* Couleur du texte */
}

/* Style pour la liste à puces à l'intérieur de la carte */
.list-group-item {
  border-color: #dee2e6; /* Couleur de la bordure des éléments de la liste */
}

/* Style pour les boutons à l'intérieur de la carte */
.card-link {
  color: #fff; /* Couleur du texte */
  text-decoration: none; /* Pas de soulignement */
  margin-right: 10px; /* Marge à droite entre les boutons */
}

/* Style pour le bouton de suppression */
.btn-delete {
  background-color: #dc3545; /* Couleur de fond rouge */
  border-color: #dc3545; /* Couleur de la bordure rouge */
}

/* Style pour le bouton de modification */
.btn-update {
  background-color: #007bff; /* Couleur de fond bleue */
  border-color: #007bff; /* Couleur de la bordure bleue */
}

    
    </style>
</head>
<body>
    <h2>Tableau des Tâches</h2>
    <div class="container mt-5">
  <div class="row">
    <?php foreach ($Tache as $Taches) { ?>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title"><?php echo $Taches['libelle']; ?></h5>   
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Description:<?php echo $Taches['description']; ?></li>
            <li class="list-group-item">Date d'échéance: <?php echo $Taches['Date_echeance']; ?></li>
            <li class="list-group-item">Priorité: <?php echo $Taches['priorite']; ?></li>
            <li class="list-group-item">État: <?php echo $Taches['etat']; ?></li>
          </ul>
          <div class="card-body">

          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

</body>
    
</html>















<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Card Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      Task Details
    </div>
    <div class="card-body">
      <h5 class="card-title">Task Label</h5>
      <p class="card-text">Description of the task goes here.</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Due Date: January 1, 2025</li>
        <li class="list-group-item">Status: In Progress</li>
        <li class="list-group-item">Priority: High</li>
      </ul>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>



