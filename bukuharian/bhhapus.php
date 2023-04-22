<?php
include "../config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "DELETE FROM bharian WHERE id=$id";
$query = mysqli_query($db, $sql);

if($query){
    header('Location:bharian.php?sukses');
}
?>