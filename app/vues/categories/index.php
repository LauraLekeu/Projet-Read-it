<?php
/*
    ./app/vues/categories/index.php
*/
?>



  <div class="categories">
    <h3>Categories</h3>
    <ul>
      <?php foreach ($categories as $categorie): ?>
        <li><a href="#"><?php echo $categorie['name']; ?><span class="ion-ios-arrow-forward"></span></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
