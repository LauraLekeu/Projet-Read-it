<?php
/*
    ./app/vues/posts/lastestIndex.php
*/
?>

<h3>Recent Blog</h3>
<?php foreach ($posts as $post): ?>
  <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url('images/<?php echo $post['image']; ?>');"></a>
    <div class="text">
      <h3 class="heading"><a href="#"><?php echo $post['resume']; ?></a></h3>
      <div class="meta">
        <div><a href="#"><span class="icon-calendar"></span><?php echo date_format(date_create($post['created_at']), "M. j, Y"); ?></a></div>
        <div><a href="#"><span class="icon-person"></span><?php echo $post['firstname']; ?></a></div>
        <!-- <div><a href="#"><span class="icon-chat"></span><?php echo $post['nombreCommentaires']; ?></a></div> -->
      </div>
    </div>
  </div>
<?php endforeach; ?>
