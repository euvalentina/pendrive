<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
   
<?php
  if(isset($_POST['enviar']))
{
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];    
    // echo "Eba, deu certo!!!";
    // echo "Seu nome de usuário é: " . $usuario;
    // echo "<br>";
    // echo "Descobri a sua senha: " . $senha; 
      
    $nomes = array("gustavo", "marcelo", "teresa");
        
        
    if(strlen($usuario) < 5)
    {
        echo "mano, coloca um nome maior ai"; 
    }
    if(strlen($usuario) > 12)
    {
        echo "Nome de usuário muito grande.";       
    }
    //    
    if(!in_array($usuario, $nomes))
    {
        echo "Você não tem permissão!";
    } 
    else
    {
         echo "Bem vindo " . $usuario;
    }  
     
}  
?>    
    
    <form action="formularios.php" method="post">
       <input type="text" placeholder="usuário" name="usuario">
       <input type="password" placeholder="senha" name="senha">
       <br>
       <input type="submit" name="enviar">     
        
    </form>
    
</body>
</html>