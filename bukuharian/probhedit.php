<?php
include "../config.php";
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $hari = $_POST['hari'];
    $tgl = $_POST['tgl'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $ket = $_POST['ket'];
    $sisa = $_POST['sisa'];
    $ttd = $_POST['ttd'];
}
$sql = "UPDATE bharian SET 
        hari='$hari',tgl='$tgl',masuk='$masuk',keluar='$keluar',ket='$ket',ket='$ket',sisa='$sisa',ttd='$ttd' WHERE id=$id";
$query = mysqli_query($db, $sql);
if($query){
    header('Location:bharian.php?SuksesMenambah');
}
?>