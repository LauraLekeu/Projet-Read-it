<?php
/*
    ./app/controleurs/authorsControleur.php
*/



 namespace Controleurs\Authors;
 use Modeles\Authors;


  function showAction(\PDO $connexion, int $id) {
    // Je demande les autheurs
    include_once '../app/modeles/authorsModele.php';
    $author = Authors\findOneById($connexion, $id);
    // Je charge la vue
    include '../app/vues/authors/show.php';
  }
