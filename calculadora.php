<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$opcao=$_POST["opcao"];

switch($opcao){
    case "somar":
     $opcao=$num1+$num2;
     echo "A soma é:" .$opcao;
     break;

     case "subtrair":
        $opcao=$num1-$num2;
        echo "A subtração é" .$opcao;
        break;

     case "dividir":
        $opcao=$num1/$num2;   
        echo "A divisão é".$opcao;
      break;

     case "multiplicar":
        $opcao=$num1*$num2;
        echo "A multiplicação é" .$opcao;
        break;
        

}