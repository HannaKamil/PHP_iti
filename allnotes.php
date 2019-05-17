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
include 'connection.php';
include 'logoutnavbar.php';

$sql=$conn->prepare("SELECT * FROM notes ");

$sql->execute();

$rows=$sql->fetchAll();
echo "<table border='2px'>";
foreach($rows as $row){

    echo "<tr >";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['datenote']."</td>";
    echo "<td>".$row['timenote']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "<td>" . "<a href='deletenote.php/?timenotee=$row[timenote]'>delete</a>"."</td>";
    echo "<td>" . "<a href='editnote.php/?timenotee=$row[timenote]'>edit</a>"."</td>";
    echo "</tr>";
}
echo "</table>";

?>



// <?php


// include "connection.php";
// $sql=$conn->prepare("SELECT * FROM students");
// $sql->execute();
// $rows=$sql->fetchAll();
// foreach($rows as $row){
//     echo "<h1>".$row['username']." ".$row['id']  . " <a href='delete.php/?idd=$row[id]'>del</a>" ."</h1>";
// } ?>


