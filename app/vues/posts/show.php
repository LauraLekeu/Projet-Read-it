<?php
/*
    ./app/vues/posts/show.php
*/
?>
<p class="mb-5">
  <img src="images/<?php echo $post['image']; ?>" alt="" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<p><?php echo $post['resume']; ?></p>
<p><?php echo $post['content']; ?></p>

<!-- Tags  -->
<div class="tag-widget post-tag-container mb-5 mt-5">
  <?php
      include_once '../app/controleurs/tagsControleur.php';
      \Controleurs\Tags\showAction($connexion, $id);
   ?>
</div>
<!-- Auteurs  -->
<div class="about-author d-flex p-4 bg-light">
  <?php
    include_once '../app/controleurs/authorsControleur.php';
    \Controleurs\Authors\showAction($connexion, $id);
   ?>
</div>
<!-- Commentaires  -->
<div class="pt-5 mt-5">
  <?php
    include_once '../app/controleurs/commentsControleur.php';
    \Controleurs\Comments\indexByPostId($connexion, $id);
   ?>
</div>
