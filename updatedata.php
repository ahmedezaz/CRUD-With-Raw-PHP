<?php
$getid = $_POST['id'];
$name = $_POST['name'];
$eng =  $_POST['eng'];
$phy =  $_POST['phy'];
$math =  $_POST['math'];

include 'config.php';

$sql = "UPDATE result SET name = '{$name}', eng = '{$eng}', phy = '{$phy}', math = '{$math}' WHERE id = {$getid}";

$result = mysqli_query($conn, $sql) or die ("SQL ERROR");

header ("location: http://localhost/result/index.php");

mysqli_close($conn);
?> 