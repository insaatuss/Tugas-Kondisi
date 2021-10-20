<?php

$totalAll=0;
$hargaBarangKe3 = 0;
$diskon=0;
$diskon_barang3=0;

$jumlah_barang1 = 2;
$nama_barang1 ="Baju";


switch($nama_barang1){
    case'Baju':
        $harga = 20000;
        $total = $jumlah_barang1 * $harga;
        $totalAll =  $totalAll + $total;
    break;
    case 'Celana':
        $harga = 30000;
        $total = $jumlah_barang * $harga;
        $totalAll =  $totalAll + $total;
    case 'Kemeja':
        $harga = 50000;
        $total = $jumlah_barang * $harga;
        $totalAll =  $totalAll + $total;
    break;
    default: 
    break;
}



$jumlah_barang2 = 2;
$nama_barang2 ="Kemeja";
switch($nama_barang2){
    case'Baju':
        $harga = 20000;
        $total = $jumlah_barang2 * $harga;
        $totalAll =  $totalAll + $total;
        $hargaBarangKe3 = $total;
    break;
    case 'Celana':
        $harga = 30000;
        $total = $jumlah_barang2 * $harga;
        $totalAll =  $totalAll + $total;
        $hargaBarangKe3 = $total;
    case 'Kemeja':
        $harga = 50000;
        $total = $jumlah_barang2 * $harga;
        $totalAll =  $totalAll + $total;
        $hargaBarangKe3 = $total;
    break;
    default: 
    break;
}



$jumlah_barang3 = 3;
$nama_barang3 ="";

switch($nama_barang3){
    case'Baju':
        $harga = 20000;
        $total = $jumlah_barang3 * $harga;
        $totalAll =  $totalAll + $total;
        $hargaBarangKe3 = $total;
    break;
    case 'Celana':
        $harga = 30000;
        $total = $jumlah_barang * $harga;
        $totalAll =  $totalAll + $total;
        $hargaBarangKe3 = $total;
    case 'Kemeja':
        $harga = 50000;
        $total = $jumlah_barang * $harga;
        $totalAll =  $totalAll + $total;
        $hargaBarangKe3 = $total;
    break;
    default: 
    break;
}


if($totalAll > 75000){
    $diskon = ($totalAll * 15/100);
    $total_bayar = $totalAll - $diskon;
}
else if ($hargaBarangKe3 != 0){
    $total_bayar =  $total_bayar - $hargaBarangKe3;
    $diskon = $hargaBarangKe3 * 20/100;
    $total_bayar = $total_bayar +  $diskon;
}



echo "Nama Barang = " . $nama_barang1 ." " . $nama_barang2 ." ". $nama_barang3. "<br/>";
echo "Jumlah Barang = " . ($jumlah_barang1+$jumlah_barang2+$jumlah_barang3) . "<br/>";
echo "Total Diskon = Rp. " . $diskon . "<br/>";
echo "Total Bayar = Rp. " . $totalAll . "<br/>";























?>