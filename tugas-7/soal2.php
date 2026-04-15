<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL - 2</title>
</head>

<body>
    <h2>Soal - 2</h2>
    <?php
    include 'menu.php';
    ?>
    <h3>Looping Bilangan Genap</h3>

    <form action="soal2.php" method="get">
        <label for="nilai_awal">Masukan Nilai Awal: </label>
        <input type="number" id="nilai_awal" name="nilai_awal">
        <br><br>
        <label for="nilai_akhir">Masukkan Nilai Akhir: </label>
        <input type="number" id="nilai_akhir" name="nilai_akhir">
        <br><br>
        <input type="submit" value="Looping Genap" name="submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $nilai_awal = $_GET['nilai_awal'];
        $nilai_akhir = $_GET['nilai_akhir'];

        echo "<br> Looping bilangan dari  $nilai_awal sampai $nilai_akhir: <br> ";
        for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
        echo "<br>";
    }
    ?>

    <br>
    <a href="index.php">Balik ke menu awal</a>
</body>

</html>