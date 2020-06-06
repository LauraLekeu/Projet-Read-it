<?php
/*
    ./app/modeles/authorsModele.php
*/



namespace Modeles\Authors;



 function findOneById(\PDO $connexion, int $id) {
   $sql = "SELECT *
           FROM posts p
           JOIN authors a ON p.author_id = a.id
           WHERE p.id = :id;";
   $rs = $connexion->prepare($sql);
   $rs->bindValue(':id', $id, \PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetch(\PDO::FETCH_ASSOC);
 }
