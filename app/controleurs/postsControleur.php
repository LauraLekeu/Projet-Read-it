<?php
/*
    ./app/controleurs/postsControleur.php
*/

namespace Controleurs\Posts;
use Modeles\Posts;


//
function indexAction(\PDO $connexion) {
  // Je demande la liste des 10 derniers posts.
  include_once '../app/modeles/postsModele.php';
  $posts = Posts\findAll($connexion);
  // Je charger la vue dans $content
  GLOBAL $content, $title;
  $title = "Recent posts";
  ob_start();
    include '../app/vues/posts/index.php';
  $content = ob_get_clean();
}


//
function showAction(\PDO $connexion, int $id) {
  // Je demande les détails d'un article
  include_once '../app/modeles/postsModele.php';
  $post = Posts\findOneById($connexion, $id);
  // Je charge la vue dans $content
  GLOBAL $content, $title;
  $title = $post['title'];
  ob_start();
    include '../app/vues/posts/show.php';
  $content = ob_get_clean();
}


//
function lastestIndex(\PDO $connexion) {
  // Je demande les derniers posts
  include_once '../app/modeles/postsModele.php';
  $posts = Posts\findLastest($connexion);
  // Je charge la vue index
  include '../app/vues/posts/lastestIndex.php';
}
