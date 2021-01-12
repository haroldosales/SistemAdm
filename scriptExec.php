<?php
  include "mensagem.php";

  $nome = $_POST['nome'];


  validaNome($nome);


  header('location:index.php');

 ?>
