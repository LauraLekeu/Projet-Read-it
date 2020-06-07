<?php
/*
    ./app/vues/comments/indexByPostId.php
*/
?>
<?php
   if ($nbComments['nbComments'] > 0):
?>

    <h3 class="mb-5"><?php echo $nbComments['nbComments'] . " comments "; ?></h3>
    <ul class="comment-list">
      <?php foreach ($comments as $comment): ?>
        <li class="comment">
          <div class="comment-body">
            <h3><?php echo $comment['pseudo']; ?></h3>
            <div class="meta mb-3"><?php echo $comment['created_at']; ?></div>
            <p><?php echo $comment['content']; ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>

    <?php
  else:
    ?>
      <h3 class="mb-5">0 comment</h3>

      <?php
    endif;
      ?>

<!-- END comment-list -->

<div class="comment-form-wrap pt-5">
  <h3 class="mb-5">Leave a comment</h3>
  <form action="?comments=add" class="p-5 bg-light" method="post">
    <div class="form-group">
      <label for="pseudo">Name *</label>
      <input name="pseudo" type="text" class="form-control" id="pseudo">
    </div>
    <div class="form-group">
      <label for="content">Message</label>
      <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>" />
      <input type="submit" name="comments=add" value="Post Comment" class="btn py-3 px-4 btn-primary">
    </div>

  </form>
</div>
