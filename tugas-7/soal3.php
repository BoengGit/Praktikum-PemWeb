<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL - 3</title>
</head>

<body>
    <h2>Soal-3</h2>
    <?php
    include 'menu.php';
    ?>
    <h3>Menampilkan Nama Hewan</h3>
    <form action="soal3.php" method="get">
        <label for="nama_hewan_1">Masukkan Nama Hewan 1: </label>
        <input type="text" id="nama_hewan_1" name="nama_hewan[]">
        <br><br>
        <label for="nama_hewan_2">Masukkan Nama Hewan 2: </label>
        <input type="text" id="nama_hewan_2" name="nama_hewan[]">
        <br><br>
        <label for="nama_hewan_2">Masukkan Nama Hewan 3: </label>
        <input type="text" id="nama_hewan_2" name="nama_hewan[]">
        <br><br>
        <label for="nama_hewan_2">Masukkan Nama Hewan 4: </label>
        <input type="text" id="nama_hewan_2" name="nama_hewan[]">
        <br><br>
        <label for="nama_hewan_2">Masukkan Nama Hewan 5: </label>
        <input type="text" id="nama_hewan_2" name="nama_hewan[]">
        <br><br>
        <input type="submit" value="Nama Hewan" name="submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $data_nama_hewan = $_GET['nama_hewan'];

        echo "<br>";
        if (!empty($data_nama_hewan)) {
            foreach ($data_nama_hewan as $hewan) {
                echo  $hewan . "<br>";
            }
        } else {
            "<br> Masukkan data anda woi!";
        }
    }
    ?>

    <br>
    <a href="index.php">Balik ke menu awal</a>

</body>

</html>