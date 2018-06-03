<?php
session_start();
require_once '../views/header.php';?>
    <!-- Page baner -->
    <header class="masthead" style="background-image: url('/img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Форма добавления нового поста</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Хотите добавить новый пост? Заполните форму ниже!</p>

          <form name="addPost" id="contactForm" method="POST" action="/add_post.php"> <novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Заголовок</label>
                <input type="text" class="form-control" placeholder="Введите зоголовок поста" name="title">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Текст</label>
                <textarea rows="5" class="form-control" placeholder="Текст поста" name="text" ></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendPostButton">Создать!</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
 <?php require_once '../views/footer.php';?>
