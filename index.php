<?php

include __DIR__ . "/functions.php";

$password = generatePassword($_GET["pswLength"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- BOOTSTRAP -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <title>Document</title>
</head>

<body>
      <header class="text-center my-4">
            <h1><strong>Strong Password Generator</strong></h1>
            <p>Genera una password sicura</p>
      </header>
      <main>
            <div class="container text-center my-4">
                  <form action="index.php">
                        <div>
                              <label for="pswLength">Insersci la lunghezza della password desiderata</label>
                              <input type="text" name="pswLength" id="pswLength">
                        </div>
                        <button type="submit" class="btn btn-primary">Genera</button>
                  </form>
            </div>
            <div class="password text-center">
                  <h2>La tua password</h2>
                  <?php if (is_null($password)) : ?>
                        <h3><strong>Inserisci un valore!</strong></h3>
                  <?php else : ?>
                        <h3><strong><?= $password ?></strong></h3>
                  <?php endif ?>
            </div>
      </main>
      <footer></footer>
</body>

</html>