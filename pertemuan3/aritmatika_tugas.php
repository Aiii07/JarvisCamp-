<?php 
$a = 10;
$b = 5;

function tambah($a, $b) {
    return $a + $b;
}

function kurang($a, $b) {
    return $a - $b;
}

function kali($a, $b) {
    return $a * $b;
}

function bagi($a, $b) {
    if ($b == 0) {
        return "Error: Pembagian dengan nol tidak diperbolehkan.";
    }
    return $a / $b;
}

echo "10 + 5 = " . tambah($a, $b) . "<br>";
echo "10 - 5 = " . kurang($a, $b) . "<br>";
echo "10 x 5 = " . kali($a, $b) . "<br>";
echo "10 / 5 = " . bagi($a, $b) . "<br>";

?>