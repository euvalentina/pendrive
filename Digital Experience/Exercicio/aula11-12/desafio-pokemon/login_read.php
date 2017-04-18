<?php include "db.php";?>
<?php include "functions.php"; ?>
<?php include "header.php"; ?>
<div class="container">
    <div class="col-sm-6">
      <h1 class="text-center">READ</h1>
        <pre>
        <?php
        lePokemonFogo();
        ?>
        </pre>

        <br><br>

        <a class="btn btn-primary" href="login_create.php" role="button">CREATE</a>
        <a class="btn btn-primary" href="login_read.php" role="button">READ</a>
        <a class="btn btn-primary" href="login_update.php" role="button">UPDATE</a>
        <a class="btn btn-primary" href="login_delete.php" role="button">DELETE</a>

    </div>
<?php include "footer.php"; ?>
