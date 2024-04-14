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
       <div class="main-container">
            <section class="home section">CReer une tache</section>
       </div>
       <!-- <section class="Etat">
       <!-- <a href="index.php"><button class="cssbuttons-io-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg>
        <span>Add</span>
        </button></a>  

        <div class="card"> <h3>À Faire</h3>
        <table>
            
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Priorité</th>
                    <th>État</th>
                    <th>Action</th>
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
                        <button class="btn btn-delete"><a href="updateTaches.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-edit"></i> </a></button></td>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($tacheEncours !== null) ?>
                        <?php foreach ($tacheEncours as $tacheAFaire) { ?>
                            <tr>
                                <td><?php echo $tacheAFaire['libelle']; ?></td>
                                <td><?php echo $tacheAFaire['priorite']; ?></td>
                                <td><?php echo $tacheAFaire['etat']; ?></td>
                                <td><button class="btn btn-delete"><a href="deleteTaches.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-trash-alt"></i></a></button></td>
                                <td><button class="btn btn-delete"><a href="updateTaches.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-edit"></i> </a></button></td>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($tacheAcheves !== null) ?>
                        <?php foreach ($tacheAcheves as $tacheAFaire) { ?>
                            <tr>
                                <td><?php echo $tacheAFaire['libelle']; ?></td>
                                <td><?php echo $tacheAFaire['priorite']; ?></td>
                                <td><?php echo $tacheAFaire['etat']; ?></td>
                                <td><button class="btn btn-delete"><a href="deleteTaches.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-trash-alt"></i></a></button></td>
                                <td><button class="btn btn-delete"><a href="updateTaches.php?id=<?php echo $tacheAFaire['id']; ?>"><i class="fas fa-edit"></i> </a></button></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>  
        </section>
     -->



    
    </div>






<style>

:root {
    --bg-black-900:#f2f2fc;
    --bg-black-100:#fdf9ff;
    --bg-black-900:#e8dfec;
    --text-black-900:#302e4d;
    --text-black-700:#504e70;
    --text-black-600:#FFC0CB;


}


.card {
    border: 1px solid #f3e8b6;
    border-radius: 15px;
    padding: 16px;
    margin-bottom: 16px;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: px;
}

.card-title {
    margin: 0;
}

.card-meta {
    display: flex;
}

.priority, .status {
    margin-right: 16px;
}

.date-icon {
    font-size: 24px;
    margin-bottom: 8px;
}

.actions a {
    color: #333;
    text-decoration: none;
    margin-right: 8px;
}

.actions a:hover {
    color: #007bff;
}


body{
    margin: 0;
    padding: 0;
    line-height :1.5;
    font-size: 16px;
    background-color: #007bff;
    

}
/* * 
{
    margin: 0;
    padding: 0;
    outline: none;
    text-decoration: none;
    box-sizing: border-box;
} */
::before,::after
{
    box-sizing: border-box;
}
ul{
    list-style: none;

}
.Etat {
    background-color:#DEB887;
    min-height: 100vh;
    display: block;
    position: fixed;
    left: 270px;
    top: 0;
    right: 0;
    z-index: 0;
    opacity: 1;
}
/* .home section a {
    padding-top: 20px;
    margin-left: 50px;
   
} */

.aside{
    width: 270px;
    background: var(  --bg-black-100);
    position: fixed;
    left: 0;
    top: 0;
    padding:30px ;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 10;
}
.nav li a i {
    vertical-align: middle;
    text-decoration:none ;
    
}
.aside .logo{
    position: absolute;
    top: 50px;
    font-size: 50px;
    text-transform: capitalize;
}
.aside .logo a {
    color: red;
    background: #504e70;
    text-decoration: none;
    padding: 15px 20px;
    font-size: 30px;
    letter-spacing: 5px;
}
.nav li a {
    text-decoration: none;
    font-size: 18px;

}

.main-container{
    display: flex ;
}
/* .main-container.Etat{
    background-color: #c82333;
    padding-top: 40px;
    float: right;
    padding-left: 25%;
    margin-right: 0;
    padding-left: 0;
    
} */
.Etat{
    display: flex;
    gap: 50px;
    margin-left: 18%;

}
.nav{
   text-align: center;
   margin-left: 50px;
  
   
}

.cssbuttons-io-button {
    display: flex;
    align-items: center;
    font-family: inherit;
    font-weight: 500;
    font-size: 16px;
    padding: 0.7em 1.4em 0.7em 1.1em;
    color: white;
    background: #ad5389;
    background: linear-gradient(0deg, rgba(20,167,62,1) 0%, rgba(102,247,113,1) 100%);
    border: none;
    box-shadow: 0 0.7em 1.5em -0.5em #14a73e98;
    letter-spacing: 0.05em;
    border-radius: 20em;
  }
  .cssbuttons-io-button svg {
    margin-right: 6px;
  }
  
  .cssbuttons-io-button:hover {
    box-shadow: 0 0.5em 1.5em -0.5em #14a73e98;
  }
  
  .cssbuttons-io-button:active {
    box-shadow: 0 0.3em 1em -0.5em #14a73e98;
  }


  .card {
    border-radius: 100px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    background-color: #fff;
    padding: 20px;
}

.card table {
    width: 100%;
    border-collapse: collapse;
}

.card th, .card td {
    border-bottom: 1px solid #ccc;
    padding: 10px 0;
}

.card th {
    text-align: left;
    color: #333;
}

.card td {
    text-align: center;
}

/* .card .btn {
    padding: 8px 12px;
    background-color: #4caf50;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.card .btn:hover {
    background-color: #45a049;
}

.card .btn-delete {
    background-color: #f44336;
}

.card .btn-delete:hover {
    background-color: #d32f2f;
} */



/* Style pour les boutons */
.btn {
    display: inline-block;
    padding: 8px 16px;
    font-size: 14px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

/* Style pour les boutons de suppression */


.btn-delete:hover {
    background-color: #c82333;
}

/* Style pour les boutons de modification */
.btn-edit {
    background-color: #007bff;
    color: #fff;
}

.btn-edit:hover {
    background-color: #0056b3;
}




</style>













</body>
</html>
