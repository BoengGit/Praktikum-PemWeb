<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL - 4</title>
</head>

<body>
    <h2>Soal-4</h2>
    <?php
    include 'menu.php';
    ?>
    <h3>Cel Genap atau Ganjil</h3>

    <form action="soal4.php" method="get">
        <label for="nilai">Masukkan Nilai: </label>
        <input type="number" id="nilai" name="nilai">
        <br><br>
        <input type="submit" value="Cek Genap atau Ganjil" name="submit">
    </form>


    <?php
    if (isset($_GET['submit'])) {
        $nilai = $_GET['nilai'];

        $akhir = ($nilai % 2 != 0) ? "Ganjil" : "Genap";
        echo "<br>";
        echo "Bilangan" . " $nilai " . "adalah " . $akhir;
        echo "<br>";
    }
    ?>

    <br>
    <a href="index.php">Balik ke menu awal</a>
</body>

</html>