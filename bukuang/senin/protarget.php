<?php
include "../../config.php";
if(isset($_POST['submit'])){
    $hari = $_POST['hari'];
    $uang = $_POST['uang'];
}
$sql = "UPDATE thari SET 
        uang='$uang' WHERE hari='senin'";
$query = mysqli_query($db, $sql);
if($query){
    header('Location:senin.php?SuksesMenambah');
}
?>