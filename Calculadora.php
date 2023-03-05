<?php

  function calcular ($n1,$n2,$op) {

    if ($op=="soma") {

      $res=$n1+$n2;
      echo "<center> <h1> A soma é $res </h1> </center>";

    }

    if ($op=="sub") {

      $res=$n1-$n2;
      echo "<center> <h1> A subtração é $res </h1> </center>";

    }

    if ($op=="mult") {

      $res=$n1*$n2;
      echo "<center> <h1> A multiplicação é $res </h1> </center>";
      
    }

    if ($op=="div") {

      $res=$n1/$n2;
      echo "<center> <h1> A divisão é $res </h1> </center>";
      
    }

  }

  calcular ($_POST["n1"], $_POST["n2"], $_POST["op"]);

?>