    <?php
    
    $nome = "NomeDoCookie";
    $valor = 100;
    $expira = time() + (60*60*24*7);

        setcookie($nome,$valor,$expira);
    

/*

    if (isset($_COOKIE['cookie_teste'])) {
        echo 'Você JÁ passou por aqui!';
    } else {
        echo 'Você NUNCA passou por aqui.';
        setcookie('cookie_teste', 'Algum valor...', time() + 3600);
    }
*/


    ?>
  




<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    
    <?php
        if(isset($_COOKIE["NomeDoCookie"])){
            $nomeCookie = $_COOKIE["NomeDoCookie"];
            echo $nomeCookie;
        }
        else{
            $nomeCookie = "";
        }
    
    ?>
    
</body>
</html>