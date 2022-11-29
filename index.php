<?php
/* Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato. */
/* Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php */
$pswLength = $_GET['psw_length'];
if ($pswLength >= 1) {
      function generatePassword($length)
      {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789,;:!?.$/*-+&@_+";
            $password = '';

            for ($i = 0; $i < $length; $i++) {
                  $rand = rand(0, strlen($chars) - 1);
                  $password .= substr($chars, $rand, 1);
            }

            return $password;
      }
} else {
      echo 'inserisci un valore';
}

/* Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale */
/* Milestone 3 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. */
/* Milestone 4 (BONUS - OPZIONALE)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION (documentazione) recupererà la password da mostrare all’utente. */
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
                              <label for="psw_length">Insersci la lunghezza della password desiderata</label>
                              <input type="text" name="psw_length" id="psw_length">
                        </div>
                        <button type="submit" class="btn btn-primary">Genera</button>
                  </form>
            </div>
            <div class="password text-center">
                  <h2>La tua password</h2>
                  <h3><strong><?= generatePassword($pswLength) ?></strong></h3>
            </div>
      </main>
      <footer></footer>
</body>

</html>