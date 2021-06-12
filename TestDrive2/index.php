<?php
    $valor = 10;
    $valor *= 5;
    //echo $valor;

    $nome = 'Mateus';
    $nome .= ' Nicolodi';
    //echo $nome;

    //echo 121 / 11;

    $valor1 = 10;
    $valor2 = 10;

    //var_dump($valor1 !== $valor2);

    ($valor1 == $valor2) ? $resultado = true : $resultado = false;
    //var_dump($resultado);

    $v1 = 10;
    $v1++;
    $v1++;
    $v1++;
    $v1++;
    $v1--;
    //echo $v1;

    $v1 = 0;
    $v2 = $v1++;
    //echo $v1.' - '.$v2;

    $v1 = true;
    $v2 = false;
    //var_dump(($v1 || $v2) && !$v2);

    $nome = 'Mateus';
    $sobrenome = 'Nicolodi';
    echo $nome.$sobrenome;
?>