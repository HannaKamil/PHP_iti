<?php
include  'connection.php';
$idd= $_GET['idd'];
$sql = "DELETE FROM users WHERE  id=$idd";