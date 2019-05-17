<?php
if (!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['userName_session'])){
    echo "you should register first";
    echo "<a href='/exam3/login.php'>login</a> <br>";
}else {
    include 'connection.php';

    $search_value = $_POST["search"];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql = $conn->prepare("select *
                                  from  news 
                                  WHERE title LIKE '%$search_value%'");


        $sql->execute();
        $count = $sql->rowCount();
        if ($count) {
            echo '<b style="color: red;">' . $count . '</b>' . " of results found of: " . '<b style="color: blue;">' . $search_value . '</b>';

            $rows = $sql->fetchAll();
            foreach ($rows as $row) {
                echo "<div>" . $row['id'] . "</div>";
                echo "<div>" . $row['title'] . "</div>";
                echo "<div>" . $row['type'] . "</div>";
                echo "<div>" . $row['body'] . "</div>";
                echo "<div> <img src='  images/uploads/" . $row['image'] . "  ' alt = '' /></div>";
                echo "<div>" . $row['date'] . "</div>";
            }

        } else {
            echo "<b style='color: red;'> No results found, Try again.. </b>";
            echo "<a href='/exam3/home.php'>back</a>";

        }

    }
}
?>