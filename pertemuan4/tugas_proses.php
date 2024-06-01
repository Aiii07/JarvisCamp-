<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produk = [
        ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
        ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
        ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
        ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
        ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30],
        ["barang" => "Komputer", "Harga" => 12999000, "Deskripsi" => "Komputer baru", "Stok" => 120]
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok</th>
        </tr>
        <?php foreach ($produk as $item): ?>
            <tr>
                <td><?php echo $item['barang']; ?></td>
                <td><?php echo $item['Harga']; ?></td>
                <td><?php echo $item['Deskripsi']; ?></td>
                <td><?php echo $item['Stok']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
<?php
} else {
    header('location: tugas_form.php');
}
?>