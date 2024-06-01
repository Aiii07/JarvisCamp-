<?php 
/**
 * For
 */
for ($i=0; $i < 10; $i++) { 
    echo "$i ";
}

echo "<br>";

/**
 * While
 */
$a = 1;
while ($a <= 10) {
    echo "$a ";
    $a++;
}

echo "<br>";

/**
 * Do While
 */

$b = 0;
do {
    echo "$b";
    $b++;
} while ($b <= 10);

echo "<br>";

/**
 * Foreach
 */

 $array = ["Aisyah", "Mark", "Rem"];

 foreach ($array as $key => $value) {
    $no = $key + 1;
     echo $no. " - $value <br>";
 }

?>