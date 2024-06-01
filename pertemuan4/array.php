<?php 
$fruits = [1, 2, 3, 4, 5];

// Mengubah elemen array
$fruits[0] = "Hijau";
$fruits[2] = "Hijau";
print_r($fruits);

echo "<br>";

// Menghitung total data di array
echo count($fruits);
echo "<br>";

// Menambahkan data di akhir array
array_push($fruits, "mangga", "apel");
print_r($fruits);
echo "<br>";

// Cek apakah data ada di array atau tidak
var_dump(in_array("Hijau", $fruits));
echo "<br>";

// Menghapus elemen terakhir dari array
$last = array_pop($fruits);
print_r($fruits);
echo "<br>";
echo $last;

// Mengosongkan array
$fruits = []; // Mengosongkan array tanpa menghapus variabel
echo "<br>";
print_r($fruits);
echo "<br>";

?>
