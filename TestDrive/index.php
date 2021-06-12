<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestaDrive</title>
</head>
<body>
    <?php
    /*
    INT
    FLOAT
    STRING
    BOOL
    ARRAYS
    OBJETOS RECURSOS
    NULL
    */

    $idade = 17;
    //$altura = 1.75;
    $nome = 'Mateus Loblein Nioclodi';
    //$casado = false;

    //$numero = 50;

    //define('CONFIG', 1500);

    //echo CONFIG;

    /*
    function calc(){
        global $numero;
        echo $numero;
    }
    */

    //calc();

    //cadastro = array('Cliente 1', 'Cliente 2', 'Cliente 3');
    //$cadastro[] = 'Cliente 1';
    //$cadastro[] = 'Cliente 2';
    //$cadastro = array('cliente1' => 'Ricardo', 'cliente2' => 'Zezinho');
    
    $cadastro = array(
        'cliente1' => array(
            'nome' => 'Mateus',
            'idade' => 17,
        ),
        'cliente2' => array(
            'nome' => 'Jorge',
            'idade' => 547,
        )
    );

    var_dump(get_defined_vars());

    //echo $cadastro['cliente2'];
    
    //echo ("Olá, meu nome é ".$nome." e eu tenho ".$idade." anos");

    ?>
    </body>
</html>