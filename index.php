<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //menyimpan data informasi
    $nis ='2233254';
    $nama ='FARICHA NAILA ROCHMANIA';
    $alamat ='Badong Pidodo Rt;01/Rw;05 Sidogemah Sayung Demak';
    $telpon ='085225061804';
    $gmail ='farika123@gmail.com';

    //menampilkan data informasi
    echo "<h1>Menampilkan tulisan<h1>";
    echo "Nis: ". $nis . "<br>";
    echo "Nama: ". $nama . "<br>";
    echo "Alamat: ". $alamat . "<br>";
    echo "Telpon: ". $telpon . "<br>";
    echo "Gmail: ". $gmail . "<br>";
    ?>
    <br>

    <form action="index.php" method="GET">
NilaiTugas: <input type="text" name="tugas"><br>
NilaiUts: <input type="text" name="uts"><br>
NilaiUas: <input type="text" name="uas"><br>
<input type="submit">

<?php


$tugas = $_GET["tugas"]; 
$uts = $_GET["uts"];   
$uas = $_GET["uas"];  


$tugas_persen = 20; 
$uts_persen = 35;   
$uas_persen = 45;   


$nilai_akhir = ($tugas * 0.20) + ($uts * 0.35) + ($uas * 0.45);

// Tentukan grade
if ($nilai_akhir >= 85) {
    $grade = 'A';
} elseif ($nilai_akhir >= 68.5) {
    $grade = 'B';
} elseif ($nilai_akhir >= 58.5) {
    $grade = 'C';
} elseif ($nilai_akhir >= 40) {
    $grade = 'D';
} else {
    $grade = 'E';
}

// Menampilkan hasil
echo "<h2>Hasil Perhitungan Nilai</h2>";
echo "<p>NIS : $nis</p>";
echo "<p>Nama : $nama</p>";
echo "<p>N. Tugas : $tugas</p>";
echo "<p>N. UTS : $uts</p>";
echo "<p>N. UAS : $uas</p>";
echo "<p>N. Akhir : $nilai_akhir</p>";
echo "<p>N. Huruf : $grade</p>";
?>
</body>
</html>