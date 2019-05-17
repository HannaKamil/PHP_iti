<?php
//session_start();
//// initializing variables
//$username = "";
//$email    = "";
//$errors = array();
//
//include 'connection.php';
//
//
//
//// REGISTER USER
//if ($_SERVER['REQUEST_METHOD']=='POST') {
//    // receive all input values from the form
//    $fullname       = @($_POST["full-name"]);
//    $username       = @($_POST["username"]);
//    $pass           = @($_POST["password"]);
//    $Confirm_pass   = @($_POST["confirm_password"]);
//    $email          = @($_POST["email-address"]);
//    $phone          = @($_POST["phone"]);
//    $gender         = @($_POST["gender"]);
//
//    // form validation: ensure that the form is correctly filled ...
//    // by adding (array_push()) corresponding error unto $errors array
//    if (empty($fullname)) { array_push($errors, "fullname is required"); }
//    if (empty($username)) { array_push($errors, "user name is required"); }
//    if (empty($pass))     { array_push($errors, "Password is required"); }
//    if (empty($email))    { array_push($errors, "Email is required"); }
//    if (empty($phone))    { array_push($errors, "Phone is required"); }
//    if (empty($gender))   { array_push($errors, "gender is required"); }
//
//
//    if ($pass != $Confirm_pass) {
//        array_push($errors, "The two passwords do not match");
//    }
//
//
//    // first check the database to make sure
//    // a user does not already exist with the same username and/or email
//    $stmt=$conn->prepare("
//    SELECT user_name, email
//    FROM register
//    WHERE user_name='$username' OR email='$email';
//    ");
//
//
//    $stmt->execute();
//    $rows = $stmt->fetchAll();
//    $count = count($rows);
//    echo $count;
//
//
//
//    foreach($rows as $row) {
//        if ($count > 0) {
//
//            if ($row['user_name'] === $username) {
//                array_push($errors, "Username already exists");
//
//            }
//
//            if ($row['email'] === $email) {
//                array_push($errors, "email already exists");
//            }
//
//        }
//    }
//
//    // Finally, register user if there are no errors in the form
//    if (count($errors) == 0) {
//        $pass = md5($pass);//encrypt the password before saving in the database
//
//            $sql="INSERT INTO register (full_name,user_name,password,email,phone,gender) VALUES
// ('$fullname', '$username', '$pass', '$email', '$phone','$gender')";
//    $conn->exec($sql);
//
//        $_SESSION['username'] = $username;
//        $_SESSION['success'] = "You are now logged in";
////        header('location: login.php');
//    }
//}
//include('errors.php');
//// ...
//
//
//
