<?php
/*
    ./app/controleurs/postsControleur.php
*/


namespace Controleurs\Posts;
use Modeles\Posts;

function indexAction(\PDO $connexion) {
  // Inclure la liste des 10 derniers posts.
  include_once '../app/modeles/postsModele.php';
  $posts = Posts\findAll($connexion);
  // Charger la vue dans $content
  GLOBAL $content;
  ob_start();
    include '../app/vues/posts/index.php';
  $content = ob_get_clean();
}
