<?php
include "../config.php";
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nm_ketua = $_POST['nm_ketua'];
    $nm = $_POST['nm'];
    $ktp = $_POST['ktp'];
    $kk = $_POST['kk'];
    $status = $_POST['status'];
}
$sql = "UPDATE tnasabah SET 
        nm_ketua='$nm_ketua',nm='$nm',ktp='$ktp',kk='$kk',status='$status' WHERE id=$id";
$query = mysqli_query($db, $sql);
if($query){
    header('Location:bnasabah.php?SuksesMenambah');
}
?>