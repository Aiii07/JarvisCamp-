<?php 
function angkaGanjil($bil1, $bil2) {
    for ($i = $bil1; $i <= $bil2; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
}

angkaGanjil(1, 10);


?>