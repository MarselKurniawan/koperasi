<?php
include "../../config.php";
if(isset($_POST['submit'])){
    $hari = $_POST['hari'];
    $uang = $_POST['uang'];
}
$sql = "UPDATE thari SET 
        uang='$uang' WHERE hari='kamis'";
$query = mysqli_query($db, $sql);
if($query){
    header('Location:kamis.php?SuksesMenambah');
}
?>