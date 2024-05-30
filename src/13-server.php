<?php

//var_dump(empty($_POST["nombre"])); //devuelve true si el nombre no está



//El isset es una función que nos permite saber si una variable está definida o no
/* if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
    echo "El nombre es: ".$_POST["nombre"];
}else{
    echo "El nombre no está definido";
}
 */
  //var_dump(isset($_POST["nombre"]));

  if(isset($_POST["form"])){
    echo "Todo el formulario fue enviado";
  }else{
    echo "No se mandó el formulario";
  }

?>