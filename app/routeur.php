<?php
/*
    ./app/routeur.php
*/
// ROUTE DE L'AJOUT D'UN COMMENTAIRE
// PATTERN: ?comments=add
// CTRL: commentsControleur.php
// ACTION: store
if (isset($_POST['comments=add'])):
 include_once '../app/controleurs/commentsControleur.php';
 \Controleurs\Comments\store($connexion, [
   'pseudo' => $_POST['pseudo'],
   'content' => $_POST['content'],
   'post_id' => $_POST['post_id']
 ]);


// ROUTE DU CONTACT:
// PATTERN: /?contact
// CTRL: Aucun
// ACTION: Aucune
elseif (isset($_GET['contact'])):
  GLOBAL $content, $title;
  $title = "Contact";
  ob_start();
    include '../app/vues/templates/partials/contact.php';
  $content = ob_get_clean();


// ROUTE DU DETAIL D'UN POST
// PATTERN: /?postID=x
// CTRL: postsControleur
// ACTION: showAction
elseif (isset($_GET['postID'])):
  include_once '../app/controleurs/postsControleur.php';
  \Controleurs\Posts\showAction($connexion, $_GET['postID']);


// ROUTE PAR DEFAUT (Liste des 10 derniers posts)
// PATTERN: /
// CTRL: postsControleur
// ACTION:  indexAction
else:
include_once '../app/controleurs/postsControleur.php';
\Controleurs\Posts\indexAction($connexion);


endif;
