<?php 
$array = [1, 2,3,4,5];

echo $array[1];
echo "<br><pre>";
print_r($array);
echo "</pre>";

//array associative
$umur = ["Aisyah" => 18, "Rem" => 25];
$umur['Mark'] = 25;
$umur['Mega'] = 19;
echo "<br><pre>";
print_r($umur);
echo "</pre>";

foreach ($umur as $key => $value) {
    echo "Namanya : $key <br> Umurnya : $value <br>";
}

//array multidimensi
$buahBuahan = [
    ["nama" => "Apel", "warna" => "Merah"],
    ["nama" => "Mangga", "warna" => "Jingga"],
    ["nama" => "Pisang", "warna" => "Kuning"],
    ["nama" => "Durian", "warna" => "Hijau"],
    ["nama" => "Bluberry", "warna" => "Biru"],
];

echo "<br><pre>";
print_r($buahBuahan);
echo "</pre>";

?>

<table border="2">
    <tr>
        <th>Nama</th>
        <th>Warna</th>
    </tr>
    <?php foreach ($buahBuahan as $buah) { ?>
        <tr>
            <td><?php echo $buah['nama'] ?></td>
            <td><?= $buah['warna'] ?></td>
        </tr>
    <?php } ?>
</table>
