<meta charset="utf-8">

<?php
include 'connection.php';
$idd=$_GET['idd'];
$q=$conn->prepare("select * FROM users WHERE id=$idd");
$q->execute();
$rows=$q->fetchAll();
foreach ($rows as $row){
    echo "<form action='../update.php' method='post'>";
    echo "<input type='text' value='$row[id]' name='idd'>";

    echo "<input type='text' value='$row[name]' name='user'>";

    echo "<input type='submit' value='update'>";
    echo "</form>";
}

