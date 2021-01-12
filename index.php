<?php
include "mensagem.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h1> Login </h1>
    <form class="" action="index.php" method="post">

       <input type="text" name="nome" value="Preença">

        <input type="submit" name="" value="entre">
        <?php
        $nome = $_POST['nome'];
         validaNome($nome)
         ?>

    </form>

  </body>
</html>
