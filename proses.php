<?php
if(isset($_POST["Submit"])){
    $nama;
if(isset($_POST["nama"])){
    $nama=$_POST['nama'];
}
$alamat;
if(isset($_POST["alamat"])){
    $alamat=$_POST['alamat'];
}
$hp;
if(isset($_POST["hp"])){
    $hp=$_POST['hp'];
}
$paket;
if(isset($_POST["paket"])){
    $paket=$_POST['paket'];
} 
$tanggal = date("Y-m-d");
    $fp = fopen("order.txt","a+");
    echo "<script>
    alert('Order Berhasil')
    </script>";
    fputs($fp,"$tanggal|$nama|$alamat|$hp|$paket|\n");
    fclose($fp);
    }
?>