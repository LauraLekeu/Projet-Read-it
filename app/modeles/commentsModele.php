<?php
/*
    .app/modeles/commentsModele.php
*/



namespace Modeles\Comments;



 function findAll(\PDO $connexion, int $id) {
   $sql = "SELECT *, COUNT(c.id)  AS nombreCommentaires
           FROM comments c
           JOIN posts p ON c.post_id = p.id
           WHERE p.id = :id;
           GROUP BY c.id;";
   $rs = $connexion->prepare($sql);
   $rs->bindValue(':id', $id, \PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetchAll(\PDO::FETCH_ASSOC);
 }
