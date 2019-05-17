<?php

include "connection.php";


//$fullname= @($_POST["full name"]);
$notename= @($_POST["notename"]);
$datenote= @($_POST["datenote"]);
$timenote= @($_POST["timenote"]);
$status = @($_POST["status"]);

$sql="INSERT INTO notes (name,datenote,timenote,status) VALUES ('$notename', '$datenote', '$timenote', '$status')";
$conn->exec($sql);

?>

<?php header("location:logoutnavbar.php"); ?>

