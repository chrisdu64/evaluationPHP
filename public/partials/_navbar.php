<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once "_bootstrap.php"?>
    <title>Le Bon Appart</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid ">
    
    <a class="navbar-brand" href="../../index.php">Le Bon Appart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">        
             <a class="nav-link" href="public/annonces/annonces.php">Consulter les annonces disponibles</a>
          </li>       
          <li class="nav-item">        
            <a class="nav-link" href="public/annonces/ajouter-une-annonce.php">Ajouter une annonce</a>
          </li>         
      </ul>     
    </div>
  </div>
</nav>
    
</body>
</html>