<?php
include "../config.php";
if(isset($_POST['submit'])){
    $nm_ketua = $_POST['nm_ketua'];
    $alamat = $_POST['alamat'];
    $nm = $_POST['nm'];
    $ktp = $_POST['ktp'];
    $kk = $_POST['kk'];
    $status = $_POST['status'];
}
$sql = "INSERT INTO tnasabah (nm_ketua,alamat,nm,ktp,kk,status) VALUES ('$nm_ketua','$alamat','$nm','$ktp','$kk','$status')";
$query = mysqli_query($db, $sql);
if($query){
    header('Location:bnasabah.php?SuksesMenambah');
}
?>