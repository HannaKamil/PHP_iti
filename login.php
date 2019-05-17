<?php
session_start();
include "navbar.php";
?>


<div class="container">
    <form action="#" method="POST">
        <fieldset>
            <legend>استمارة الدخول</legend>
            <p>
                <label>اسم المستخدم :</label>
                <input type="text" name="username" required>
            </p>
            <p>
                <label>كلمة السر :</label>
                <input type="password" name="password" required>
            </p>
            <br><br>
            <button class="btn btn-success">دخول</button>

        </fieldset>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
//if (isset($_POST)){
    include 'connection.php';

    $username     = @($_POST["username"]);
    $pass         = @(md5($_POST["password"]));


    $stmt=$conn->prepare("SELECT user_name, password
                                   FROM   register 
                                   WHERE  user_name=? and password =? ");
    $stmt->execute(array($username, $pass));
    $count = $stmt->rowCount();


    if ($count>0){


        if (!isset($_SESSION)){
            session_start();
        }

        $_SESSION['userName_session']=$username;
        $_SESSION['success'] = " ..You are now logged in";
        header("location:home.php");
    }
    else{
        echo "login invalid :| ";
    }
}


?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>
