<?php

$server = "localhost";
$user = "root";
$pw = "";
$database = "db_koperasi";

$db = mysqli_connect($server, $user, $pw, $database);

if(!$db){
    die("Maaf tidak bisa menyambung ke server");
}
?>