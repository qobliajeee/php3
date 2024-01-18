<?php

$nama_lengkap = "Qobli Atha Ashrori";
$umur = 16;
$kelas = "X RPL 2";
$tempat_lahir = "Jakarta";
$tanggal_lahir = "11 Agustus 2007";
$nomor_wa = "082115558771";
$alamat = "Jl Abdul Muis No 44 Jakarta Pusat";


function my_biodata() {
    global $nama_lengkap, $umur, $kelas, $tempat_lahir, $tanggal_lahir, $nomor_wa, $alamat;

    echo "=== Program Biodata Sederhana ===\n<br/>";
    echo "Nama: " . $nama_lengkap . "\n <br/>";
    echo "Umur: " . $umur . "\n<br/>";
    echo "Kelas: " . $kelas . "\n<br/>";
    echo "Tempat/Tanggal Lahir: " . $tempat_lahir . ", " . $tanggal_lahir . "\n<br/>";
    echo "Nomor WA: " . $nomor_wa . "\n<br/>";
    echo "Alamat: " . $alamat . "\n<br/>";
}


my_biodata();
?>