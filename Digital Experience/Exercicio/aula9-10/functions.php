<?php include "db.php";?>

<?php

function mostraDados(){
global $connection;
$query = "SELECT * FROM usuarios";
$resultado = mysqli_query($connection, $query);

 while($row = mysqli_fetch_assoc($resultado)){
     $id = $row['id'];
     echo "<option value='$id'>$id</option>";

    }

}

function atualizaTabela(){
    global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "UPDATE usuarios SET ";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id ";

$resultado = mysqli_query($connection, $query);

if(!$resultado){
    die("Falha na atulização");
} else {
    echo "Dados atualizados com sucesso!";
}

}

function deletaLinha(){
global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "DELETE from usuarios  ";
$query .= "WHERE id = $id";

$resultado = mysqli_query($connection, $query);

if(!$resultado){
    die("Falha ao excluir");
} else {
    echo "Dados removidos com sucesso!";
}

}


function criaDados(){
  global $connection;

  if(isset($_POST['enviar']))
  {
      $username = $_POST['username'];
      $password = $_POST['password'];
      //Query para inserir os dados de acordo com os nomes das variáveis.
      $query = "INSERT INTO usuarios(username,password) VALUES ('$username', '$password')";
      //Função para inserir os dados em nosso banco.
      $resultado = mysqli_query($connection, $query);
      //Validação
      if(!$resultado){
          die("Não deu certo a inclusão" .mysqli_error());
      } else {
          echo "Dados criados com sucesso";
      }

  }


}

function leTabela()
{
  global $connection;

  $query = "SELECT * FROM usuarios";
  $resultado = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($resultado))
      {
    print_r($row);
      }

}




?>
