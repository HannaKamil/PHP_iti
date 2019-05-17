<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){

    include "connection.php";
    $user=$_POST['usernameForm'];
    $pass=$_POST['passwordForm'];
    $q=$conn->prepare("SELECT username,password 
                                FROM register 
                                WHERE username='$user' AND password='$pass'");

    //or
    // $q=$conn->prepare("SELECT username,password FROM students WHERE username=? AND password=?");

    $q->execute(array($user, $pass));
    $rows=$q->fetch();
    $count=$q->rowCount();

    if($count>0){
        $_SESSION['userr'] = $user;
         header("location:logoutnavbar.php");

    }else{
        echo"wrong!";
    }

}
