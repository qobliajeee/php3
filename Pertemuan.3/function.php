<?php

//built in function
//fungsi yang sudah disediakan oleh php
//contoh echo"hello world"

date_default_timezone_set("Asia/Tokyo");
$tanggal = date("d-m-y");
$waktu = date("H:i:s");

echo "Di Tokyo hari ini tanggal : $tanggal; <br/>
Jam di Tokyo : $waktu";

//User define function
//Fungsi yang kita buat sendiri

function namaSaya($nama,$umur){
    //$namaLengkap = "Nama saya adalah $nama;
    $umurSaya = "Umur saya adalah : $umur";
    return $umurSaya;
}
// echo namaSaya("Jugar Fadillah",20);
// function jumlahDuaBilangan($a,$b){
//     $total = $a + $b;

//     return $total;
// }

// function jumlahDuaBilangan($a, $b){
//     $total = $a + $b;
//     return $total;
// }

// echo namaSaya("Jugar mengeow" ,20 );
// echo jumlahDuaBilangan(5, 3);

$a = 10;
function nilaiSaya(){
    global $a;
    echo $a;
}
echo nilaiSaya();

?>