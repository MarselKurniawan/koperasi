<?php
include "../../config.php";
if(isset($_POST['submit'])){
    $tgl = $_POST['tgl'];
    $nm_ketua = strtoupper($_POST['nm_ketua']);
    $masuk = $_POST['masuk'];
    $ket = $_POST['ket'];
    $angsuran = $_POST['angsuran'];
    $penerima = $_POST['penerima'];
}
$sql = "INSERT INTO tjumat (tgl,nm_ketua,masuk,ket,angsuran,penerima) VALUES ('$tgl','$nm_ketua','$masuk','$ket','$angsuran','$penerima')";
$query = mysqli_query($db, $sql);
if($query){
    header('Location:jumat.php?SuksesMenambah');
}
?>