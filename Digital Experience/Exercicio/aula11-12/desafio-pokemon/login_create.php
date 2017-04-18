<?php include "db.php"; ?>
<?php include "functions.php";?>
<?php inserePokemon(); ?>
<?php include "header.php"; ?>

<div class="container">

    <div class="col-sm-6">

      <h1 class="text-center">INSERE POKÉMON</h1>

        <form action="login_create.php" method="post">

            <div class="form-group">
            <label for="pokename">Nome do Pokémon</label>
            <input type="text" name="pokename" class="form-control">
            </div>

            <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" class="form-control">
            </div>
            
            <div class="form-group">
            <label for="hp">HP</label>
            <input type="range" min="0" max="100" value="0" step="1" onchange="showValue(this.value)" name="hp" />
            <span id="range" name="hp">0</span>
            <script type="text/javascript">
                function showValue(newValue)
                    {
	           document.getElementById("range").innerHTML=newValue;
                    }
            </script>
            
            </div>

            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
<?php include "buttons.php"; ?>

        </form>
    </div>
<?php include "footer.php"; ?>
