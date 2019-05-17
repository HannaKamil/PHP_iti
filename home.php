<div class="container">
    <?php
    if (!isset($_SESSION)){
        session_start();
        include "navbar.php";
        include "contentHomePage.php";

    }

    if(isset($_SESSION['userName_session'])){
        $username=$_SESSION['userName_session'];
        echo $_SESSION['userName_session'];
        echo $_SESSION['success'];


    }
    else{
        echo 'no user is logged in now';
    }
    ?>

</div>

</body>
</html>