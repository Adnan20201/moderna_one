<?php

// session_start();
// require_once "../inc/db.php";

// if (isset($_POST['submit'])) {
//   $_email = $_POST['email'];
//   $_password = $_POST['password'];
//   $_enc_password = sha1($password);


//   //Email Validation  Start__

//   if (empty($_email)) {
//     $_SESSION['error_email'] = "Please Enter Your Email";
//     header('location: ./index.php');
//   }

//   //Password Validation  Start__
//   if (empty($_password)) {
//     $_SESSION['error_password'] = "Please Enter Your Password";
//     header('location: ./index.php');
//   }


//   // Login Pro

//   $select = "SELECT email from moderna_table where email ='$_email'";
//   $query = mysqli_query($connect, $select);

//   // print_r($query);

//   if (mysqli_num_rows($query) > 0) {

//     $select = "SELECT id, password from moderna_table where password = '$_enc_password'";
//     $query = mysqli_query($connect, $select);
//     // $fetch = mysqli_fetch_assoc($query);
//     // print_r($fetch);
//     // exit();

//     if (mysqli_num_rows($query) > 0) {
//       $_SESSION["error_password"] = "Login Successful";
//       $_SESSION['login'] = true;
//       header('location: ../dashboard/index.php');
//     } else {
//       $_SESSION["error_password"] = "Your password Wrong";
//       header('location: ./index.php');
//     }
//   } else {
//     $_SESSION["error_email"] = "Unmatch email Address";
//     header('location: ./index.php');
//   }
// }
