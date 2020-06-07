<?php
/*
    .app/controleurs/commentsControleur.php
*/

namespace Controleurs\Comments;
use Modeles\Comments;
use Modeles\Posts;


 // function indexByPostId(\PDO $connexion, int $id) {
 //   // Je demande les commentaires
 //   include_once '../app/modeles/commentsModele.php';
 //   $comments = Comments\findAll($connexion, $id);
 //   // Je demande les posts
 //   include_once '../app/modeles/postsModele.php';
 //   $post = Posts\findOneById($connexion, $id);
 //   // Je charge la vue
 //   include '../app/vues/comments/indexByPostId.php';
 // }
function indexByPostId(\PDO $connexion, int $id) {
  // Je demande les commentaires
  include_once '../app/modeles/commentsModele.php';
  $comments = Comments\findOneById($connexion, $id);
  // Je demande le nb de commentaires par posts
  include_once '../app/modeles/commentsModele.php';
  $nbComments = Comments\findNbComments($connexion, $id);
  //   // Je demande les posts
  include_once '../app/modeles/postsModele.php';
  $post = Posts\findOneById($connexion, $id);
  // Je charge la vue indexByPostId
  include '../app/vues/comments/indexByPostId.php';
}




 function store(\PDO $connexion, array $data) {
   // Je demande d'ajouter le commentaire
   include_once '../app/modeles/commentsModele.php';
   $id = Comments\insertOneByPostId($connexion, $data);
   // Je redirige vers la page du post
   if ($id > 0) {
     header('location: ?postID=' . $data['post_id'] );
   }
 }
