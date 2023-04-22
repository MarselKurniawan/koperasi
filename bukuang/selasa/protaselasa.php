<?php
include "../../config.php";
if(isset($_POST['submit'])){
    $tanggal = $_POST['tanggal'];
    $nm_ketua = strtoupper($_POST['nm_ketua']);
    $masuk = $_POST['masuk'];
    $ket = $_POST['ket'];
    $angsuran = $_POST['angsuran'];
    $penerima = $_POST['penerima'];
}
$sql = "INSERT INTO tselasa (tanggal,nm_ketua,masuk,ket,angsuran,penerima) VALUES ('$tanggal','$nm_ketua','$masuk','$ket','$angsuran','$penerima')";
$query = mysqli_query($db, $sql);
if($query){
    header('Location:selasa.php?SuksesMenambah');
}
?>