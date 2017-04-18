<?php include "db.php";?>

<?php

function mostraDados(){
global $connection;
$query = "SELECT * FROM pokemons";
$resultado = mysqli_query($connection, $query);

 while($row = mysqli_fetch_assoc($resultado)){
     $id = $row['id'];
     echo "<option value='$id'>$id</option>";

    }

}

function atualizaPokemon(){
    global $connection;
      $pokename = $_POST['pokename'];
      $tipo = $_POST['tipo'];
      $hp = $_POST['hp'];
      $id = $_POST['id'];

$query = "UPDATE pokemons SET ";
$query .= "name = '$pokename', ";
$query .= "type = '$tipo', ";
$query .= "hp = '$hp' ";
$query .= "WHERE id = $id ";

$resultado = mysqli_query($connection, $query);

if(!$resultado){
    die("Falha na atulização");
} else {
    echo "Dados atualizados com sucesso!";
}

}

function deletaPokemon(){
global $connection;

$id = $_POST['id'];

$query = "DELETE from pokemons  ";
$query .= "WHERE id = $id";

$resultado = mysqli_query($connection, $query);

if(!$resultado){
    die("Falha ao excluir");
} else {
    echo "Pokémon removido com sucesso!";
}

}


function inserePokemon(){
  global $connection;

  if(isset($_POST['enviar']))
  {
      $pokename = $_POST['pokename'];
      $tipo = $_POST['tipo'];
      $hp = $_POST['hp'];
      
      //Query para inserir os dados de acordo com os nomes das variáveis.
    
      $query = "INSERT INTO pokemons(name,type,hp) VALUES ('$pokename', '$tipo',$hp)";
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

function lePokemonFogo()
{
  global $connection;

  $query = "SELECT * FROM pokemons WHERE type = 'fire' ";
  $resultado = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($resultado))
      {
    print_r($row);
      }

}




?>
