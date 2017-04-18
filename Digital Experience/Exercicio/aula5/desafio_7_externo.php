<?php
    if(isset($_POST['enviar'])){

        
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $erro = FALSE;
        

        $minimo = 5;
        $maximo = 10;    
        

        
        
        if(strlen($usuario) < $minimo || strlen($usuario) > $maximo){
            echo "O nome de usuário deve ter entre 5 e 10 caracteres. <br>";
            $erro = TRUE; 
        }

        if(strlen($senha) < 4){
            echo "Senha muito curta. <br>";
            $erro = TRUE; 
        }
        
        if(!strstr($email, '@')){
            echo "Digite o e-mail corretamente. <br>";
            $erro = TRUE;
        }
        if(strlen($estado)!=2){
            echo "Preencha o estado corretamente. <br>";
            $erro = TRUE;
        }
        if(!$erro){
            echo "Todos os dados foram preenchidos corretamente";
        }
        
        
        
    }
    

?>