<?php

include 'connection.php';
include "logoutnavbar.php";

echo $_GET['timenotee'];
$timenotee = $_GET['timenotee'];
$q="DELETE FROM notes WHERE timenote=$timenotee";
$conn->exec($q);