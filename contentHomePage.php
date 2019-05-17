<html>
<head>

</head>
<body>
<form method="POST" action="search.php">
    <input type="text" name="search" placeholder="Search..">
    <input type="submit" value="search">
</form>
</body>
</html>





<?php

//if (!isset($_SESSION['userName_session'])) {
//    session_start();
//}

if(!isset($_SESSION['userName_session'])){
    echo "you should register first";
    echo "<a href='/exam3/login.php'>login</a> <br>";

}else {
    include 'connection.php';
    $sql = $conn->prepare("SELECT * FROM news");
    $sql->execute();
    $rows = $sql->fetchAll();
    foreach ($rows as $row) {

        echo "<div>" . $row['id'] . "</div>";
        echo "<div>" . $row['title'] . "</div>";
        echo "<div>" . $row['type'] . "</div>";
        echo "<div>" . $row['body'] . "</div>";
        echo "<div> <img src='  images/uploads/" . $row['image'] . "  ' alt = '' /></div>";
        echo "<div>" . $row['date'] . "</div>";

       echo "<td>" . "<a href='delete.php/?idd=$row[id]'>delete</a>"."</td> <br>";
       echo "<td>" . "<a href='edit.php/?idd=$row[id]'>edit</a>"."</td>";
echo "<hr>";
    }
}
//?>

