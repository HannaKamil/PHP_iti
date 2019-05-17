<meta charset="utf-8">
<?php
include 'connection.php';
$idd  = $_POST['idd'];
$user = $_POST ['user'];
$q="UPDATE users SET username='$user' WHERE id=$idd";

$conn->exec($q);
