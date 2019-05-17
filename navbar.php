<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



        <link rel="icon" href="Favicon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <title>Jesus Website</title>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


            body{
                margin: 0;
                font-size: .9rem;
                font-weight: 400;
                line-height: 1.6;
                color: #212529;
                text-align: left;
                background-color: #f5f8fa;
            }

            .navbar-laravel
            {
                box-shadow: 0 2px 4px rgba(0,0,0,.04);
            }

            .navbar-brand , .nav-link, .my-form, .login-form
            {
                font-family: Raleway, sans-serif;
            }

            .my-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .my-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }


        </style>
    </head>
<body>



<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
<?php
        if(isset($_SESSION['userName_session'])){

            echo "<div class='collapse navbar-collapse' id='navbarSupportedContent'>";
            echo "<ul class='navbar-nav ml-auto'>";
                echo "<li class='nav-item'>
                    <a class='nav-link' href='home.php'>Home</a>
                </li>";
            echo"<li class='nav-item'>
                    <a class='nav-link' href='addNews.php'>Add News</a>
                </li>";
                echo "<li class='nav-item'>
                    <a class='nav-link' href='logout.php'>Log out</a>
                </li>";
            echo"</ul>";

        echo "</div>";

        }else{
            echo "<div class='collapse navbar-collapse' id='navbarSupportedContent'>";
            echo "<ul class='navbar-nav ml-auto'>";
            echo "<li class='nav-item'>
                    <a class='nav-link' href='login.php'>Login</a>
                </li>";
            echo"<li class='nav-item'>
                    <a class='nav-link' href='register.php'>Register</a>
                </li>";
//            echo "<li class='nav-item'>
//                    <a class='nav-link' href='home.php'>Home</a>
//                </li>";
            echo"</ul>";

            echo "</div>";

        }

 ?>

        <a class="navbar-brand float-left" href="#">News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>