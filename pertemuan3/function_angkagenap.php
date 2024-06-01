<?php 
function angkaGenap($bil1, $bil2) {
    for ($i = $bil1; $i <= $bil2; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

angkaGenap(1, 10);


?>