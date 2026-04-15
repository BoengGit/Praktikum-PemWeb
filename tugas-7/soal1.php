<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal - 1</title>
</head>

<body>
    <h2>Soal - 1</h2>
    <?php
    include 'menu.php';
    ?>
    <h3>Program Switch Menentukan Jenis Kendaraan Berdasarkan Jumlah Roda</h3>
    <form action="soal1.php" method="get">
        <label for="roda">Masukkan Jumlah Roda: </label>
        <input type="number" id="roda" name="roda">
        <br><br>
        <input type="submit" value="Cek Jenis Kendaraan" name="submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $inputan_roda = $_GET['roda'];

        switch ($inputan_roda) {
            case 2:
                echo "<br> Jenis Kendaraan: Sepeda Motor";
                break;
            case 3:
                echo "<br> Jenis Kendaraan: Beca";
                break;
            case 4:
                echo "<br> Jenis Kendaraan: Mobil";
                break;
            default:
                echo "<br> Jenis Kendaraan Tidak Diketahui";
        }
    }
    ?>
    
    <br>
    <a href="index.php">Balik ke menu awal</a>
</body>

</html>