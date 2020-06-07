<?php
/*
    .app/modeles/commentsModele.php
*/



namespace Modeles\Comments;


 function findOneById(\PDO $connexion, int $id) {
   $sql = "SELECT *
           FROM posts p
           JOIN comments c ON c.post_id = p.id
           WHERE p.id = :id;";
   $rs = $connexion->prepare($sql);
   $rs->bindValue(':id', $id, \PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetchAll(\PDO::FETCH_ASSOC);
 }

 function findNbComments(\PDO $connexion, int $id) {
   $sql = "SELECT COUNT(id) AS nbComments, post_id
           FROM comments
           WHERE post_id = :id;
           ";
   $rs = $connexion->prepare($sql);
   $rs->bindValue(':id', $id, \PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetch(\PDO::FETCH_ASSOC);
 }


function insertOneByPostId(\PDO $connexion, array $data) :int {
  $sql = "INSERT INTO comments
          SET pseudo = :pseudo,
              content = :content,
              post_id = :post_id,
              created_at = NOW(); ";
  $rs = $connexion->prepare($sql);
  $rs->bindvalue(':pseudo', $data['pseudo'], \PDO::PARAM_STR);
  $rs->bindvalue(':content', $data['content'], \PDO::PARAM_STR);
  $rs->bindvalue(':post_id', $data['post_id'], \PDO::PARAM_INT);
  $rs->execute();
  return $connexion->lastInsertId();

}
