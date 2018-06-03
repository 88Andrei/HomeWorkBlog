<?php require_once './views/header.php';?>

   <!-- Page baner -->
   <header class="masthead" style="background-image: url('img/home-bg.jpg')">
     <div class="overlay"></div>
     <div class="container">
       <div class="row">
         <div class="col-lg-8 col-md-10 mx-auto">
           <div class="site-heading">
             <h1>МОЙ ПЕРВЫЙ БЛОГ</h1>
             <span class="subheading">Работает на PHP</span>
           </div>
         </div>
       </div>
     </div>
   </header>

   <!-- Main Content -->

   <div class="container">
     <div class="row">
       <div class="col-lg-8 col-md-10 mx-auto">
         <?php
           require_once './models/post.php';
           $conn = new PDO('mysql:host=localhost;dbname=blog_db',
                           'root', '');
           $conn->exec("set names utf8");
           $postModel = new PostModel();
           $posts=$postModel->getAll();
           foreach ($posts  as $post) {
         ?>
         <div class="post-preview">
           <a href="/">
             <h2 class="post-title">
               <?php echo $post ['title'];?>
             </h2>
             <p class="post-subtitle">
               <?php echo $post ['text'];?>
           </a>
             <h3 class="post-meta">
               <?php echo $post ['time'];?>
             </h3>
             <h3 class="post-meta">
               <?php echo $post ['user_id'];?>
             </h3>

             <!--кнопка удаления
             <?php if (isset($_SESSION['user'])) {?>
                     <div>
                       <form method="POST" action="/delete_post.php">
                         <input type="hidden" name="id" value="<?php echo $postNumber; ?>">
                         <input type="submit" value="Удалить пост">
                       </form>
                     </div>
                   <?php  } ?>-->
         </div>
       <?php } ?>
         <hr>

         <!-- Pager -->
         <?php if (isset ($_SESSION ['user'])) { ?>
         <div class="clearfix">
           <a class="btn btn-primary float-right" href="/views/form.php">Добавить новый пост &rarr;</a>
         </div>
         <?php } ?>
       </div>
     </div>
   </div>
   <!-- Footer -->
<?php require_once './views/footer.php';?>
