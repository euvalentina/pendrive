<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    
    <?php
    
    $listaNumeros = array(17, 257, 239, 2, 52);
    echo $listaNumeros[4];
    
    print_r($listaNumeros);
    
     echo "<br>";

    
    $nomes = array('Gustavo', 'Eduardo', 'Diogo');
    print_r($nomes);

    echo "<br>";
    
    
    // Arrays Associativos
    
    $nomes2 = array("primeiro_nome" => 'Amanda', "segundo_nome" => 'Rita', "terceiro_nome" => 'Regina', "quarto_nome" => 'Julia');
    
    print_r($nomes2);
    
    echo "<br>";

    echo $nomes2['segundo_nome'];
    
    ?>
    
</body>
</html>