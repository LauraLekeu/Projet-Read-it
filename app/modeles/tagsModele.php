<?php
/*
    .app/modeles/tagsModele.php
*/
namespace Modeles\Tags;



 function findOneById(\PDO $connexion, int $id) {
   $sql = "SELECT *
           FROM tags t
           JOIN posts_has_tags pht ON pht.tag_id = t.id
           WHERE pht.post_id = :id;";
   $rs = $connexion->prepare($sql);
   $rs->bindValue(':id', $id, \PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetchAll(\PDO::FETCH_ASSOC);
 }


 function findAll(\PDO $connexion) {
   $sql = "SELECT *
           FROM tags";
   $rs = $connexion->query($sql);
   return $rs->fetchAll(\PDO::FETCH_ASSOC);
 }
