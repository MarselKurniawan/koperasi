<?php
include "../../config.php";
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $nm_ketua = $_POST['nm_ketua'];
    $masuk = $_POST['masuk'];
    $ket = $_POST['ket'];
    $angsuran = $_POST['angsuran'];
    $penerima = $_POST['penerima'];
}
$sql = "UPDATE tjumat SET 
        tgl='$tgl',nm_ketua='$nm_ketua',masuk='$masuk',ket='$ket',angsuran='$angsuran', penerima='$penerima'WHERE id=$id";
$query = mysqli_query($db, $sql);
if($query){
    header('Location:jumat.php?SuksesMenambah');
}
?>