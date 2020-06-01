<?php
/*
    ./app/routeur.php
*/
//

//   ETAPE 1
//     > Image + title + content
//   ETAPE 2 (voir astuces)
//     > Liste des tags du post
//   ETAPE 3 (voir astuces)
//     > Affichage de l'image, du nom et de la bio de l'auteur
//   ETAPE 4 (voir astuces)
//     > Liste des comments + formulaire en POST (vers ?comments=add)




// ROUTE DU DETAIL D'UN POST
// PATTERN: /?postID=x
// CTRL: postsControleur
// ACTION: showAction
if (isset($_GET['postID'])):
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
