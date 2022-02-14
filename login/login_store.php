<?php
session_start();
require_once "./inc/db.php";

if(isset($_POST['submit'])){
 $_email = trim($_POST['email']);
 $_password = trim($_POST['password']);
 $_enc_password = sha1($_password);

  // Email Validation Start___
  if (empty($_email)) {
    $_SESSION['error_email'] = "Please Enter Your Name";
    header('location: ./index.php');
  }
  // Email Validation Ends___

  // Password Validation Start___
  if (empty($_password)) {
    $_SESSION['error_password'] = "Please Enter Your Password";
    header('location: ./index.php');
  }
  // Password Validation End___


  // Login Pro
else{
  $_select = "SELECT email from submit_form_table WHERE email ='$_email'";
  $_query = mysqli_query($_connect, $_select);
  // print_r($_query);

  if(mysqli_num_rows($_query) > 0){

    $_select = "SELECT id, password from submit_form_table WHERE password =  '$_enc_password' ";
    $_query = mysqli_query($_connect, $_select);
    $_fetch = mysqli_fetch_assoc($_query);
    // print_r($_fetch);
    // exit(); 

      if(mysqli_num_rows($_query) > 0){
        $_SESSION['success'] = "Login Successful";
        $_SESSION['Login'] = "true";
        $_SESSION['user_id'] = $_fetch['id'];
        header('location: ../dashboard/index.php');
      }else{
        $_SESSION["error_password"] = "Your password Wrong";
        header('location: ./index.php'); 
      }
  }else{
    $_SESSION['error_email'] = 'Unmatch email Address';
    header('location:./index.php');
  }

}
 

}