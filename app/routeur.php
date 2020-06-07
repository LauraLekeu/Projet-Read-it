<?php
/*
    ./app/routeur.php
*/
//

//
// ROUTE DU CONTACT:
// PATTERN: /?contact
// CTRL: Aucun
// ACTION: Aucune
//   > On charge le partial _contact.php
if (isset($_GET['contact'])):
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
