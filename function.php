<?php
// Creare un form che invii in GET la lunghezza della password

$password = $_GET["password"];
echo strlen($password);

// Una nostra funzione utilizzerà questo dato per generare una password casuale 
// (composta da lettere, lettere maiuscole, numeri e simboli) 
// da restituire all’utente

function generatorRandomPassword($key)
{
    var_dump($key);

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#!$%&?';
    $randomCharacters = '';

    $i = 0;
    for ($i = 0; $i < $key; $i++) {
        $char = mt_rand(0, strlen($characters) - 1);
        $randomCharacters .= $characters[$char];
    }

    return $randomCharacters;
}
