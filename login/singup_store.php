<?php
session_start();
require_once "./inc/db.php";


if (isset($_POST['submit'])) {


  $_name = trim($_POST['name']);
  $_email = trim($_POST['email']);
  $_password = trim($_POST['password']);
  $_confirm_password = trim($_POST['confirm_password']);
  $_profile_img = $_FILES['profile_img'];
  $_enc_password = sha1($_password);

  // print_r($_profile_img);
  // exit();
  // Validation Start Here_______________

  // Name Validation Start___
  if (empty($_name)) {
    $_SESSION['error_name'] = "Please Enter Your Name";
    header('location: ./singup_form.php');
  }
  // Name Validation Ends____

  // Email Validation Start___
  if (empty($_email)) {
    $_SESSION['error_email'] = "Please Enter Your Name";
    header('location: ./singup_form.php');
  } else if (filter_var($_email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error_email'] = "Please Enter Your Valid Email";
    header('location: ./singup_form.php');
  }
  // Email Validation Ends___

  // Password Validation Start___
  if (empty($_password)) {
    $_SESSION['error_password'] = "Please Enter Your Password";
    header('location: ./singup_form.php');
  } else if (strlen($_password) < 8) {
    $_SESSION['error_password'] = "Your Password Must be 8-20 characters long";
    header('location: ./singup_form.php');
  }
  // Password Validation End___

  //Confirm Password Validation  Start__
  if (empty($_confirm_password)) {
    $_SESSION['error_confirm_password'] = "Please Enter Your Confirm  Password";
    header('location: ./singup_form.php');
  } else if ($_password != $_confirm_password) {
    $_SESSION['error_confirm_password'] = " Your Password Didn't Match";
    header('location: ./singup_form.php');
  }
  //Confirm Password Validation  Ends__

  //profile_img Validation  Start__
  if (empty($_profile_img['name'])) {
    $_SESSION['error_profile_img'] = "Please Upload your Profile Image";
    header('location: ./singup_form.php');
  } else if ($_profile_img['size'] > 500000) {
    $_SESSION['error_profile_img'] = "Please Upload a profile picture under 5mb";
    header('location: ./singup_form.php');
  }
  //profile_img Validation  Ends__


  //Img Validation  Start_______
  else {
    $_images_name = $_profile_img['name'];
    $_images_array = explode('.', $_images_name);
    $_extension = end($_images_array);
    $_new_img_name = 'user-' . uniqid() . '.' . $_extension;
    $_file_upload = move_uploaded_file($_profile_img['tmp_name'], '../dashboard/img/' . $_new_img_name);


    
      $_insert = "INSERT INTO submit_form_table(name, email, password, profile_img) VALUES ('$_name','$_email','$_enc_password','$_new_img_name')";
      $_query = mysqli_query($_connect, $_insert);

      if ($_query) {
        $_SESSION['success'] = "Registration Successful";
        header('location: ./index.php');
      } else {
        echo 'Error';
      }
   
      
  }
  //Img Validation  Ends_______




  // Validation Start Here_______________
}
