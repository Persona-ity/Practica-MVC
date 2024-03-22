<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Pop it MVC</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <style>
    a {
        text-decoration: none;
    }
    body {
        background-color:#33CCCC;
    }
    header {
        background-color:white;
    }
   </style>
</head>
<body>
<header>
   <nav>
       
       <?php
       if (!app()->auth::check()):
           ?>
           <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
           <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
       <?php
       else:
           ?>
           <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
           <a href="<?= app()->route->getUrl('/hello') ?>">Формы для создания</a>
           <a href="<?= app()->route->getUrl('/AttachSubscriber') ?>">Прикрепить абонента к номеру телефона</a>
           <a href="<?= app()->route->getUrl('/subdivition') ?>">Выбор номеров абонентов по подразделениям</a>
           <a href="<?= app()->route->getUrl('/Countabonent') ?>">Подсчёт количество абонентов по подразделениям</a>
           <a href="<?= app()->route->getUrl('/alltelephone') ?>">Все номера абонента</a>
       <?php
       endif;
       ?>
   </nav>
</header>
<main>
   <?= $content ?? '' ?>
</main>

</body>
</html>
