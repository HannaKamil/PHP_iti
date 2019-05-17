<meta charset="utf-8">


<?php
include 'connection.php';

$sql=$conn->prepare("SELECT * FROM users");

$sql->execute();

$rows=$sql->fetchAll();
foreach ($rows as $row){
    echo $row['username']."<a href='testDel.php/?idd=$row[id]'>delete</a>"."<br>";
}

?>

<?php


?>
