<?php
/*
    .app/controleurs/commentsControleur.php
*/




namespace Controleurs\Comments;
use Modeles\Comments;


 function showAction(\PDO $connexion, int $id) {
   // Je demande les commentaires
   include_once '../app/modeles/commentsModele.php';
   $comments = Comments\findAll($connexion, $id);
   // Je charge la vue
   include '../app/vues/comments/show.php';
 }
