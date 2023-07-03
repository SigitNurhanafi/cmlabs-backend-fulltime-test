<?php
function isPalindrome($string) {
    $string = str_replace(' ', '', $string);
    $string = strtolower($string);

    $reverse_string = strrev($string);
    
    if ($string === $reverse_string) {
        return true;
    } else {
        return false;
    }
}

$arr_string = [
    "SAIPPUAKIVIKAUPPIAS",
    "Aibohphobia",
    "Anna",
    "Civic",
    "My gym",
    "No lemon, no melon"
];

foreach ($arr_string as $key => $value) {
    var_dump(isPalindrome($value)) . "\n";
}