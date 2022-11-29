<?php

include __DIR__ . "/functions.php";


$password = generatePassword($_GET['pswLength'], $_GET['chars'], $_GET['numbers'], $_GET['symbol'], $_GET['repeat']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- BOOTSTRAP -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <!-- CSS -->
      <link rel="stylesheet" href="./assets/css/style.css">
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
                        <div class="lengthPsw">
                              <label for="pswLength">Insersci la lunghezza della password desiderata</label>
                              <input type="text" name="pswLength" id="pswLength" class="form-control mx-2">
                        </div>
                        <div class="mb-3 d-flex justify-content-between px-5">
                              <h4>Consenti ripetizioni di uno o più caratteri:</h4>
                              <div>

                                    <input class="form-check-input" type="radio" name="repeat" value="yes" id="repeat" <?php if (isset($_GET['repeat']) && $_GET['repeat'] == 'yes') : ?>checked='checked' <?php endif; ?>>
                                    <label class="form-check-label" for="yrepeat">
                                          Sì
                                    </label>

                                    <input class="form-check-input" type="radio" name="repeat" value="no" id="repeat" <?php if (isset($_GET['repeat']) && $_GET['repeat'] == 'no') : ?>checked='checked' <?php endif; ?>>
                                    <label class="form-check-label" for="nrepeat">
                                          No
                                    </label>
                              </div>

                        </div>
                        <div class="px-5 py-3">
                              <div class="checkbox mt-3">
                                    <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="chars" id="chars">
                                          <label class="form-check-label" for="chars">Lettere</label>
                                    </div>
                                    <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="numbers" id="numbers">
                                          <label class="form-check-label" for="numbers">Numeri</label>
                                    </div>
                                    <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="symbol" id="symbol">
                                          <label class="form-check-label" for="symbol">Simboli</label>
                                    </div>
                              </div>
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