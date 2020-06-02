<?php
/*
    ./app/vues/authors/show.php
*/
?>



<div class="bio mr-5">
  <img src="images/<?php echo $author['image']; ?>" alt="Image placeholder" class="img-fluid mb-4">
</div>
<div class="desc">
  <h3><?php echo $author['firstname']; ?><?php echo $author['lastname']; ?></h3>
<p><?php echo $author['biography']; ?></p>
</div>
