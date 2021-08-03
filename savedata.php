<?php

$name = $_POST['name'];
$eng =  $_POST['eng'];
$phy =  $_POST['phy'];
$math =  $_POST['math'];

include 'config.php';

$sql = "INSERT INTO result(name,eng,phy,math) VALUES('{$name}','{$eng}','{$phy}','{$math}')";

$result = mysqli_query($conn, $sql) or die ("SQL ERROR");

header ("location: http://localhost/result/index.php");

mysqli_cose($conn);
?>