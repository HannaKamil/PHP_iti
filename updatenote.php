<?php
include 'connection.php';
include "logoutnavbar.php";
$timenotee  = $_POST['timenotee '];
$namee  = $_POST['namee '];
$datenotee  = $_POST['datenotee '];
$statuss  = $_POST['statuss  '];

$q="UPDATE notes SET timenotee='$timenotee',$namee='$namee'  WHERE $timenote=$timenotee";

$conn->exec($q);
