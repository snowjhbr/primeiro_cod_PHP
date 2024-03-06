<?php

$lado1 = 2;
$lado2 = 2;
$lado3 = 3;

if ($lado1 + $lado2 > $lado3 || $lado1 + $lado3 > $lado2 || $lado2 + $lado3 > $lado1){
  echo "É um triângulo";
    if ($lado1 == $lado2 and $lado1 == $lado3){
      echo " do tipo EQUILÁTERO";
    }elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
      echo " do tipo ISÓSCELES";
    }else{
      echo " do tipo ESCALENO";
    }
}
else{
  echo "Não é um triângulo!";
}