<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "config.php";
require_once "Taches.php";

$tacheAcheves = $taches->getTachesByEtat("T");
$tacheAFaires = $taches->getTachesByEtat("F");
$tacheEncours = $taches->getTachesByEtat("C");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Line Example</title>
    <link rel="stylesheet" href="accueil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body>
    <div class="main-container">
        <!-- ========== Tableau de bord ========== -->
       <div class="aside" >
            <div class="logo">
                <a href=""><span>G</span>.Taches  </a>
            </div>
            <ul class="nav" >
                <li><a href="" class="active"><i class="fa fa-home"></i> Accueil</a></li>
                <li><a href=""><i class="fa fa-user"></i> Utilisateur xx</a></li>
                <li><a href=""><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
            </ul>
       </div> 
       <div class="main-containerS">
            <section class="home section">
             <a href="index.php"><button class="cssbuttons-io-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg>
                <span>Add</span>
                </button></a>  
                <div class="taches">
                    <div class="card"> <h3>À Faire</h3>
                    <table>
                        
                        <thead>
                            <tr>
                                <th>Libellé</th>
                                <th>Priorité</th>
                                <th>État</th>
                                <th style="text-align:center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if($tacheAFaires !== null) ?>
                            <?php foreach ($tacheAFaires as $tacheAFaire) { ?>
                                <tr>
                                    <td><?php echo $tacheAFaire['libelle']; ?></td>
                                    <td><?php echo $tacheAFaire['priorite']; ?></td>
                                    <td><?php echo $tacheAFaire['etat']; ?></td>
                                    <td><button class="btn btn-delete"><a href="deleteTaches.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-trash-alt"></i></a></button>
                                    <button class="btn btn-delete"><a href="updateTaches.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-edit"></i> </a></button>
                                    <button class="btn btn-delete"><a href="detailTaches.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-angle-down"></i></a></button>
                                   
 </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>

                    <div class="card"> <h3>En cours</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Libellé</th>
                                    <th>Priorité</th>
                                    <th>État</th>
                                    <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if($tacheEncours !== null) ?>
                                <?php foreach ($tacheEncours as $tacheAFaire) { ?>
                                    <tr>
                                        <td><?php echo $tacheAFaire['libelle']; ?></td>
                                        <td><?php echo $tacheAFaire['priorite']; ?></td>
                                        <td><?php echo $tacheAFaire['etat']; ?></td>
                                        <td><button class="btn btn-delete"><a href="deleteTaches.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-trash-alt"></i></a></button>
                                        <button class="btn btn-delete"><a href="update-en-cours.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-edit"></i> </a></button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="card"> <h3>Terminée</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Libellé</th>
                                    <th>Priorité</th>
                                    <th>État</th>
                                    <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if($tacheAcheves !== null) ?>
                                <?php foreach ($tacheAcheves as $tacheAFaire) { ?>
                                    <tr>
                                        <td><?php echo $tacheAFaire['libelle']; ?></td>
                                        <td><?php echo $tacheAFaire['priorite']; ?></td>
                                        <td><?php echo $tacheAFaire['etat']; ?></td>
                                        <td><button class="btn btn-delete"><a href="deleteTaches.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-trash-alt"></i></a></button>
                                        <!-- <button class="btn btn-delete"><a href="updateTaches.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-edit"></i> </a></button></td> -->
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>   
                </div>  
                
                <a href="readTaches.php"><button class="cssbuttons-io-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg>
                <span>voire la liste des taches</span>
                </button></a>  
            </section>
       </div>

      

    </div>
    <div>
    <button class="btn">VOire la liste des Taches</button>
    </div>
</body>
</html>
