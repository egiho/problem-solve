<?php
function compareStringsIgnoreCase($str1, $str2) {
    // Mengubah kedua string menjadi huruf kecil agar perbandingan tidak case-sensitive
    $str1_lower = strtolower($str1);
    $str2_lower = strtolower($str2);

    // Membandingkan kedua string yang telah diubah menjadi huruf kecil
    if ($str1_lower === $str2_lower) {
        return true;
    } else {
        return false;
    }
}

// Example usage:
$string1 = "I like to drink water";
$string2 = "I Like Too Drink Water";
$result = compareStringsIgnoreCase($string1, $string2);
echo $result ? "true" : "false"; // Output: false
