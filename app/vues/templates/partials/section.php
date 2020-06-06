<?php
/*
    ./app/vues/templates/partials/section.php
*/
?>
<section class="ftco-section ftco-degree-bg">
   <div class="container">
     <div class="row">
       <div class="col-lg-8 ftco-animate">
         <div class="container">
           <?php echo $content; ?>
         </div>
       </div>


       <!-- .col-md-8 -->  <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
         <div class="sidebar-box">
           <form action="#" class="search-form">
             <div class="form-group">
               <span class="icon icon-search"></span>
               <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
             </div>
           </form>
         </div>



         <div class="sidebar-box ftco-animate">
           <?php
              include_once '../app/controleurs/categoriesControleur.php';
              \Controleurs\Categories\indexAction($connexion);
            ?>
         </div>



         <div class="sidebar-box ftco-animate">
           <?php
              include_once '../app/controleurs/postsControleur.php';
              \Controleurs\Posts\lastestIndex($connexion);
            ?>
         </div>

         <div class="sidebar-box ftco-animate">
           <h3>Tag Cloud</h3>
           <div class="tagcloud">
             <a href="#" class="tag-cloud-link">cat</a>
             <a href="#" class="tag-cloud-link">abstract</a>
             <a href="#" class="tag-cloud-link">people</a>
             <a href="#" class="tag-cloud-link">person</a>
             <a href="#" class="tag-cloud-link">model</a>
             <a href="#" class="tag-cloud-link">delicious</a>
             <a href="#" class="tag-cloud-link">desserts</a>
             <a href="#" class="tag-cloud-link">drinks</a>
           </div>
         </div>

       </div> <!-- / .col-md-8 -->




     </div>
   </div>
 </section>
