<?php
include "connection.php";
$q = $conn->prepare("SELECT * FROM students");
echo "hello";
for ($i=0;$i<10;$i++){
    echo "hello" . "<br>";
}