<?php

  function validaNome(string $nome) : bool
  {
    if( empty($nome))
    {
       echo "nao pode está vazio";
       return false;
    }
    else if(strlen($nome)<3){
      echo "nao pode ser menor de 3 caracter";
      return false;
    }
    else if(strlen($nome)>40){
      echo "nao pode ser maior de 40 caracter";
      return false;
    }
    return true;
  }

 ?>
