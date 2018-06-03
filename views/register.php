<?php require_once './views/header.php';?>

   <!-- Page baner -->
   <header class="masthead" style="background-image: url('img/home-bg.jpg')">
     <div class="overlay"></div>
     <div class="container">
       <div class="row">
         <div class="col-lg-8 col-md-10 mx-auto">
           <div class="site-heading">
             <h1>Страница регистрации в системе</h1>
             <span class="subheading">Работает на PHP</span>
           </div>
         </div>
       </div>
     </div>
   </header>
  <body>
    <div class="col-lg-8 col-md-10 mx-auto">
      <p>Хотите зарегистрироваться в системе? Заполните форму ниже!</p>
	<form method="POST" action="/register.php">
	    <input type="email" name="email" placeholder="Введите email"></br>
      <input type="password" name="password" placeholder="Введите пароль"></br>
      <button type="submit" class="btn btn-primary" id="sendPostButton">Зарегистрироваться</button>
    </form>
  </div>
</body>
<!-- Footer -->
<?php require_once './views/footer.php';?>
