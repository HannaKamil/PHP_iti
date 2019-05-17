<!DOCTYPE html>
<html>
<head>
    <<meta charset="utf-8">
    <title>Page Title</title>
</head>
<body>
    <form action="registerCode.php" method ="post">

               الأسم: <br><input type="text" name="name"> <br>
               اسم المستخدم: <br><input type="text" name="username"><br>
        الرقم السري: <br><input type="password" name="password"><br>
               المدينة: <br><input type="text" name="city"><br>

               رقم التليفون:<br><input type="text" name="phone"><br>

              gender:<br><input type="radio" name="gender" value="male"> Male<br>
               <input type="radio" name="gender" value="female"> Female<br>
                <input type="submit" value="add">
    </form action="insert.php" method ="post">



    <form action="show.php" method ="post">
        <input type="submit" value="select">

    </form>

    <form action="search.php" method ="post">
        <input type="submit" value="search">
    </form>

    <form  action= "logincode.php" method="post">
        username: <input type="text" name="usernameForm"><br>
        password: <input type="text" name="passwordForm"><br>

        <input type="submit" value="click">

    </form>



</body>
</html>


<?php


?>
