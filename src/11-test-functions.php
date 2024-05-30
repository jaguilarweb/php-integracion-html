<?php
      $lista_numero = array();
      $i = 0;
      $cantidad = readline("Cantidad de números a revisar: ");
      while($i < $cantidad) {
        $numero = readline("Ingrese un número: ");
        $lista_numero[]= $numero;
        $i++;
      }



      function esPar($numero){
        if($numero % 2 == 0){
          echo "El número $numero es par.";
        }else{
          echo "El número $numero es impar.";
        }
        echo "\n";
      }


      foreach($lista_numero as $numero){
        esPar($numero);
      }

    //Ejecutar función
    //esPar($numero);
?>