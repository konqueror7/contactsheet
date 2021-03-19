<?php

namespace Alterra;

require 'autoload.php';

?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>alterra contactsheet</title>
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>
    <div class="container">
      <div class="contacts-box">
        <div class="contacts-box-header box-item">
          <p >Добавить контакт</p>
        </div>
        <div class="contacts-form box-item">
          <form name="contacts_form" class="form-contacts" action="" method="post">
            <input type="text" name="name" placeholder="Имя" required value="">
            <input type="text" class="input-phone" name="phone" placeholder="Телефон" required value="">
            <button type="submit" name="submit">Добавить</button>
          </form>
        </div>
      </div>
      <div class="contacts-box">
        <div class="contacts-box-header box-item">
          <p>Список контактов</p>
        </div>
        <div class="contact-list box-item">

        </div>
      </div>
    </div>
    <script type="module" src="js/script.js"></script>
    <script src="https://unpkg.com/imask"></script>
    <script type="text/javascript">
      var element = document.querySelector('.input-phone');
      var maskOptions = {
        mask: '{8} 000 000 00 00'
      };
      var mask = IMask(element, maskOptions);
    </script>
  </body>
</html>
