<?php
/*
    ./app/vues/posts/index.php
*/
?>
<div class="container">
  <div class="row d-flex">
    <?php foreach ($posts as $post): ?>
        <div class="col-md-6 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <a href="?postID=<?php echo $post['id']; ?>" class="block-20" style="background-image: url('images/<?php echo $post['image']; ?>');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="topper d-flex align-items-center">
                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                  <span class="day"><?php echo date_format(date_create($post['created_at']), "j"); ?></span>
                </div>
                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                  <span class="yr"><?php echo date_format(date_create($post['created_at']), "Y"); ?></span>
                  <span class="mos"><?php echo date_format(date_create($post['created_at']), "F"); ?></span>
                </div>
              </div>
              <h3 class="heading mb-3"><a href="?postID=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
              <p><?php echo $post['resume']; ?></p>
              <p><a href="?postID=<?php echo $post['id']; ?>" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
            </div>
          </div>
        </div>
    <?php endforeach; ?>
  </div>
  <div class="row mt-5">
    <div class="col text-center">
      <div class="block-27">
        <ul>
          <li><a href="#">+</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>












<!-- <div class="col-md-6 d-flex ftco-animate">
 <div class="blog-entry justify-content-end">
    <a href="article.html" class="block-20" style="background-image: url('images/image_1.jpg');">
    </a>
    <div class="text p-4 float-right d-block">
     <div class="topper d-flex align-items-center">
       <div class="one py-2 pl-3 pr-1 align-self-stretch">
         <span class="day">18</span>
       </div>
       <div class="two pl-0 pr-3 py-2 align-self-stretch">
         <span class="yr">2019</span>
         <span class="mos">October</span>
       </div>
     </div>
     <h3 class="heading mb-3"><a href="#">Article title</a></h3>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
  </div>
</div>
<div class="col-md-6 d-flex ftco-animate">
 <div class="blog-entry justify-content-end">
    <a href="article.html" class="block-20" style="background-image: url('images/image_2.jpg');">
    </a>
    <div class="text p-4 float-right d-block">
     <div class="topper d-flex align-items-center">
       <div class="one py-2 pl-3 pr-1 align-self-stretch">
         <span class="day">18</span>
       </div>
       <div class="two pl-0 pr-3 py-2 align-self-stretch">
         <span class="yr">2019</span>
         <span class="mos">October</span>
       </div>
     </div>
     <h3 class="heading mb-3"><a href="#">Article title</a></h3>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
  </div>
</div>
<div class="col-md-6 d-flex ftco-animate">
 <div class="blog-entry justify-content-end">
    <a href="article.html" class="block-20" style="background-image: url('images/image_3.jpg');">
    </a>
    <div class="text p-4 float-right d-block">
     <div class="topper d-flex align-items-center">
       <div class="one py-2 pl-3 pr-1 align-self-stretch">
         <span class="day">18</span>
       </div>
       <div class="two pl-0 pr-3 py-2 align-self-stretch">
         <span class="yr">2019</span>
         <span class="mos">October</span>
       </div>
     </div>
     <h3 class="heading mb-3"><a href="#">Article title</a></h3>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
  </div>
</div>

<div class="col-md-6 d-flex ftco-animate">
 <div class="blog-entry justify-content-end">
    <a href="article.html" class="block-20" style="background-image: url('images/image_4.jpg');">
    </a>
    <div class="text p-4 float-right d-block">
     <div class="topper d-flex align-items-center">
       <div class="one py-2 pl-3 pr-1 align-self-stretch">
         <span class="day">18</span>
       </div>
       <div class="two pl-0 pr-3 py-2 align-self-stretch">
         <span class="yr">2019</span>
         <span class="mos">October</span>
       </div>
     </div>
     <h3 class="heading mb-3"><a href="#">Article title</a></h3>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
  </div>
</div>
<div class="col-md-6 d-flex ftco-animate">
 <div class="blog-entry justify-content-end">
    <a href="article.html" class="block-20" style="background-image: url('images/image_5.jpg');">
    </a>
    <div class="text p-4 float-right d-block">
     <div class="topper d-flex align-items-center">
       <div class="one py-2 pl-3 pr-1 align-self-stretch">
         <span class="day">18</span>
       </div>
       <div class="two pl-0 pr-3 py-2 align-self-stretch">
         <span class="yr">2019</span>
         <span class="mos">October</span>
       </div>
     </div>
     <h3 class="heading mb-3"><a href="#">Article title</a></h3>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
  </div>
</div>
<div class="col-md-6 d-flex ftco-animate">
 <div class="blog-entry justify-content-end">
    <a href="article.html" class="block-20" style="background-image: url('images/image_6.jpg');">
    </a>
    <div class="text p-4 float-right d-block">
     <div class="topper d-flex align-items-center">
       <div class="one py-2 pl-3 pr-1 align-self-stretch">
         <span class="day">18</span>
       </div>
       <div class="two pl-0 pr-3 py-2 align-self-stretch">
         <span class="yr">2019</span>
         <span class="mos">October</span>
       </div>
     </div>
     <h3 class="heading mb-3"><a href="#">Article title</a></h3>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
  </div>
</div>

<div class="col-md-6 d-flex ftco-animate">
 <div class="blog-entry justify-content-end">
    <a href="article.html" class="block-20" style="background-image: url('images/image_7.jpg');">
    </a>
    <div class="text p-4 float-right d-block">
     <div class="topper d-flex align-items-center">
       <div class="one py-2 pl-3 pr-1 align-self-stretch">
         <span class="day">18</span>
       </div>
       <div class="two pl-0 pr-3 py-2 align-self-stretch">
         <span class="yr">2019</span>
         <span class="mos">October</span>
       </div>
     </div>
     <h3 class="heading mb-3"><a href="#">Article title</a></h3>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
  </div>
</div>
<div class="col-md-6 d-flex ftco-animate">
 <div class="blog-entry justify-content-end">
    <a href="article.html" class="block-20" style="background-image: url('images/image_8.jpg');">
    </a>
    <div class="text p-4 float-right d-block">
     <div class="topper d-flex align-items-center">
       <div class="one py-2 pl-3 pr-1 align-self-stretch">
         <span class="day">18</span>
       </div>
       <div class="two pl-0 pr-3 py-2 align-self-stretch">
         <span class="yr">2019</span>
         <span class="mos">October</span>
       </div>
     </div>
     <h3 class="heading mb-3"><a href="#">Article title</a></h3>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
  </div>
</div>
<div class="col-md-6 d-flex ftco-animate">
 <div class="blog-entry justify-content-end">
    <a href="article.html" class="block-20" style="background-image: url('images/image_9.jpg');">
    </a>
    <div class="text p-4 float-right d-block">
     <div class="topper d-flex align-items-center">
       <div class="one py-2 pl-3 pr-1 align-self-stretch">
         <span class="day">18</span>
       </div>
       <div class="two pl-0 pr-3 py-2 align-self-stretch">
         <span class="yr">2019</span>
         <span class="mos">October</span>
       </div>
     </div>
     <h3 class="heading mb-3"><a href="#">Article title</a></h3>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
  </div>
</div> -->
