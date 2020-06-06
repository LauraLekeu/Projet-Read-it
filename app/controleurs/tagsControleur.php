<?php
/*
    ./app/controleurs/tagsControleur.php
*/

namespace Controleurs\Tags;
use Modeles\Tags;



 function showAction(\PDO $connexion, int $id) {
   // Je demande les tags
   include_once '../app/modeles/tagsModele.php';
   $tags = Tags\findOneById($connexion, $id);

   // Je charge la vue show dans $content;
   include '../app/vues/tags/show.php';
 }
