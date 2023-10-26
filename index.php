<?php

    require_once("controleur/controleur.class.php");
    // instanciation de la classe Controleur
    $unControleur = new Controleur();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site_scolarite</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Orange</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=2">Client</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=3">Produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=4">Technicien </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=5">Intervention </a>
        </li>
    </div>
  </div>
</nav>
<center>

    <?php
    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }else {
        $page = 1;
    }
    switch ($page){
        case 1 : require_once ("home.php");break;
        case 2 : require_once ("gestion_client.php");break;
        case 3 : require_once ("gestion_produit.php");break;
        case 4 : require_once ("gestion_technicien.php");break;
        case 5 : require_once ("gestion_intervention.php");break;
        default : require_once ("erreur.php");break;
    }
    ?>
</center>

</body>
</html>