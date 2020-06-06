<?php
/*
    .app/controleurs/categoriesControleur.php
*/
namespace Controleurs\Categories;
use Modeles\Categories;

function indexAction(\PDO $connexion) {
  // Je demande les catégories au modèle
  include_once '../app/modeles/categoriesModele.php';
  $categories = Categories\findAll($connexion);
  // Je charge la vue index
  include '../app/vues/categories/index.php';
}
