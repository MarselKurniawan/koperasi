<?php
include "../../config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "DELETE FROM trabu WHERE id=$id";
$query = mysqli_query($db, $sql);

if($query){
    header('Location:rabu.php?sukses');
}
?>