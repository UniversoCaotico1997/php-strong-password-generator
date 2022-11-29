<?php
// Creare un form che invii in GET la lunghezza della password

$password = $_GET["password"];
echo strlen($password);

// Una nostra funzione utilizzerà questo dato per generare una password casuale 
// (composta da lettere, lettere maiuscole, numeri e simboli) 
// da restituire all’utente

function generatorRandomPassword($key)
{
    $uppercaseCharacter = "ABCDEFGHILMNOPQRSTUVZ";
    $lowercase = "abcdefghilmnopqrstuvz";
    $number = "123456789";
    $simbol = "!£$%&/()?^:;,.";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container py-5 bg-success">
        <h1 class="text-center">Strong Password Generetor</h1>
        <h2 class="text-center text-white">Genere una password sicura</h2>
        <input class="form-control py-3 " type="text" value="Nessun parametro valido inserito" aria-label="Disabled input example" disabled readonly>
        <div class="box bg-white mt-4 d-flex justify-content-around rounded">
            <div class="left d-flex flex-column mt-3">
                <label class="mb-4">
                    Lunghezza password:
                </label>
                <!-- /.label -->
                <label>
                    Consenti ripetizioni di uno o più caratteri:
                </label>
                <!-- /.label -->
                <div class="mt-5">
                    <button type="button" class="btn btn-primary">Invia</button>
                    <button type="button" class="btn btn-secondary">Annulla</button>
                </div>
                <!-- /.button -->
            </div>
            <!-- /.left -->
            <div class="right">
                <form class="d-flex flex-column mt-3" action="index.php" method="GET">

                    <div class="mb-4">
                        <input type="text" name="password" id="password">
                    </div>
                    <div class="mb-2">
                        <input type="radio" name="" id=""> Si
                    </div>
                    <div class="mb-4">
                        <input type="radio" name="" id=""> No
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" name="checkbox" id="checkbox"> Lettere
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" name="checkbox" id="checkbox"> Numeri
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" name="checkbox" id="checkbox"> Simboli
                    </div>
                </form>
                <!-- /.form -->
            </div>
            <!-- /.right -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.container -->
</body>

</html>