<?php
include "../config.php";
if(isset($_POST['submit'])){
    $hari = $_POST['hari'];
    $tgl = $_POST['tgl'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $ket = $_POST['ket'];
    $sisa = $_POST['sisa'];
    $ttd = $_POST['ttd'];
}
$sql = "INSERT INTO bharian (hari,tgl,masuk,keluar,ket,sisa,ttd) VALUES ('$hari','$tgl','$masuk','$keluar','$ket','$sisa','$ttd')";
$query = mysqli_query($db, $sql);
if($query){
    header('Location:bharian.php?SuksesMenambah');
}
?>