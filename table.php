<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<?php 

include "connection.php";
$sql="SELECT * FROM users";
$stmt=$conn->prepare($sql);
$stmt->execute();
$rows=$stmt->fetchAll();
?>
<h2>HTML Table</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Username</th>
    <th>Password</th>
  </tr>
  <?php
  foreach($rows as $row){
      echo "<tr>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['username']."</td>";
      echo "<td>".$row['password']."</td>";
      echo "<td>" . "<a href='delete.php/?idd=$row[id]'>delete</a>"."</td>";
      echo "<td>" . "<a href='edit.php/?idd=$row[id]'>edit</a>"."</td>";
      echo "<tr>";
  }

  ?>
</table>

</body>
</html>