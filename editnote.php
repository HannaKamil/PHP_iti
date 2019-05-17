<?php
include 'connection.php';

$timenotee=$_GET['timenotee'];
$q=$conn->prepare("select * FROM notes WHERE timenote=$timenotee");
$q->execute();
$rows=$q->fetchAll();
foreach ($rows as $row){
    echo "<form action='../updatenotes.php' method='post'>";
    echo "<input type='text' value='$row[name]' name='namenotee'>";
    echo "<input type='text' value='$row[datenote]' name='dotenotee'>";
    echo "<input type='text' value='$row[timenote]' name='timenotee'>";
    echo "<input type='text' value='$row[status]' name='statuss'>";

//    echo "<input type='text' value='$row[name]' name='user'>";

    echo "<input type='submit' value='update'>";
    echo "</form>";
}