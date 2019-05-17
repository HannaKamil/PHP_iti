<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<<body>
<span></span>
</body>
</html>

<?php

include "navbar.php";
if (!isset($_SESSION)) {
    session_start();
}
include 'connection.php';
$sql=$conn->prepare("SELECT * FROM news");
$sql->execute();

$rows=$sql->fetchAll();

echo "<table border='2px'>";
foreach($rows as $row){

     echo "<tr >";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['password']."</td>";
    echo "<td>".$row['city']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>" . "<a href='delete.php/?idd=$row[id]'>delete</a>"."</td>";
    echo "<td>" . "<a href='edit.php/?idd=$row[id]'>edit</a>"."</td>";
    echo "</tr>";
}
echo "</table>";

?>