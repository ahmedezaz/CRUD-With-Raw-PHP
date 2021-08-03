<?php

$getid = $_GET['id'];
include 'config.php';
$sql = "DELETE FROM result WHERE id = {$getid}";
        
$result  = mysqli_query($conn, $sql);

header ("location: http://localhost/result/index.php");

mysqli_close($conn);

?>