<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 6: LATIHAN NILAI</title>
</head>

<body>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br>
        Nilai: <input type="number" name="nilai" required><br>
        <input type="submit" name="submit" value="Proses">
    </form>
    <br>
    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $var_nama = $_POST['nama'];
        $var_nilai = $_POST['nilai'];

        echo "<h3>Hasil Pengecekan:</h3>";
        echo "Nama : $var_nama <br>";
        echo "Nilai : $var_nilai <br>";
        if ($var_nilai >= 85 && $var_nilai <= 100) {
            $predikat = "A";
            $status = "Lulus";
        } elseif ($var_nilai >= 75 && $var_nilai <= 84) {
            $predikat = "B";
            $status = "Lulus";
        } elseif ($var_nilai >= 65 && $var_nilai <= 74) {
            $predikat = "C";
            $status = "Lulus";
        } elseif ($var_nilai >= 50 && $var_nilai <= 64) {
            $predikat = "D";
            $status = "Lulus";
        } elseif ($var_nilai >= 0 && $var_nilai <= 49) {
            $predikat = "E";
            $status = "Tidak Lulus";
        } else {
            $predikat = "Tidak Valid";
            $status = "-";
        }
        echo "Predikat : $predikat <br>";
        echo "Status : $status <br>";
    }
    ?>
</body>

</html>