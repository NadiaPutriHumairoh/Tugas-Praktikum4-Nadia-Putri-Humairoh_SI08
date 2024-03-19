
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>hasil nilai</title>
<style>
    .kotak {
        margin:120px 100px 75px 500px;
        text-align:left;
        width: 250px;
        height: 280px;
        background-color:#ADD8E6;
        padding: 30px;
        
    }
    
    h2{
        text-align:center;
    }
</style>
</head>
<body>

<div class="kotak">
    <h2>Hasil Nilai Akhir </h2>
    <hr>
    <?php
    require_once 'model.php';


    if( !isset($_POST["submit"])    ){
        header("Location: index.php");
        exit;
    }
    
    $proses = $_POST["submit"];
    $nama_mahasiswa = $_POST["Nama"];
    $matkul = $_POST["matakuliah"];
    $hasil_UTS = $_POST["UTS"];
    $hasil_UAS = $_POST["UAS"];
    $hasil_tugas = $_POST["tugas"];
    $nilai_akhir = ($hasil_UTS + $hasil_UAS + $hasil_tugas) / 3;
    
    
    echo 'Nama Siswa : '  . $nama_mahasiswa;
    echo '<br> Mata Kuliah : ' . $matkul;
    echo '<br> Nilai UTS : ' . $hasil_UTS;
    echo '<br> Nilai UAS : ' . $hasil_UAS;
    echo '<br> Nilai Tugas : ' . $hasil_tugas;
    
    echo '<br> Nilai Akhir : ' . $nilai_akhir;
    echo '<br> DINYATAKAN : ' . kelulusan($nilai_akhir);
    echo '<br> GRADE : ' . grade($nilai_akhir);
    
    
    
    
    ?>
    
</div>

</body>
</html>
<?php


