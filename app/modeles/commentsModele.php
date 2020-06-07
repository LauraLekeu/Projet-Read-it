<?php
/*
    .app/modeles/commentsModele.php
*/



namespace Modeles\Comments;




 function findAll(\PDO $connexion, int $id) {
   $sql = "SELECT * , COUNT(c.id) AS nombreCommentaires
           FROM comments c
           JOIN posts p ON c.post_id = p.id
           WHERE p.id = :id;
           GROUP BY c.id;";
   $rs = $connexion->prepare($sql);
   $rs->bindValue(':id', $id, \PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetchAll(\PDO::FETCH_ASSOC);
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
