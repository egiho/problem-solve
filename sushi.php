<?php

function findSushi($inputString) {
    // Mengubah seluruh string menjadi huruf kecil agar pencarian tidak case-sensitive
    $lowercaseInput = strtolower($inputString);
    
    // Mencari indeks dari kata "sushi" dalam string input yang telah diubah menjadi huruf kecil
    $indexOfSushi = strpos($lowercaseInput, "sushi");

    if ($indexOfSushi !== false) {
        // Jika kata "sushi" ditemukan, maka mengambil kata tersebut dari string input asli
        $sushiWord = substr($inputString, $indexOfSushi, 5); // Panjang kata "sushi" adalah 5 karakter
        return $sushiWord;
    } else {
        // Jika kata "sushi" tidak ditemukan, maka mengembalikan string kosong
        return "";
    }
}

// Example usage:
$inputString1 = "One of the recommended food from japan is Sushi";
$inputString2 = "Indonesian doesn't eat Sushi";

$output1 = findSushi($inputString1);
echo $output1; // Output: "Sushi"

$output2 = findSushi($inputString2);
echo $output2; // Output: "Sushi"
