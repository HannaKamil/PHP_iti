<?php

include 'connection.php';

$id = $_GET['idd'];
$q="DELETE FROM news WHERE id=$id";
$conn->exec($q);
echo "Delete done!";
header("location: ../home.php");
