<?php
// $umur = $_POST['umur'];
// $ktp = $_POST['ktp'];

// echo $umur;
// echo $ktp;

// if (isset($_POST['submit'])) {
//     $umur = $_POST['umur'];
//     $ktp = $_POST['ktp'];

//     if ($umur >= 17 && $ktp == TRUE) {
//         echo $umur;
//         echo $ktp;
//     }
// }

if (
    isset($_POST['submit'])
    && !empty($_POST['umur'])
    && !empty($_POST['ktp'])
) {
    $umur = $_POST['umur'];
    $ktp = $_POST['ktp'];

    if ($umur >= 17 && $ktp === "true") {
        echo "Gokill";
    } else {
        echo "no gokil";
    }
}
