<?php
session_start();
require_once "../inc/db.php";


if (isset($_POST['submit'])) {

  $title = $_POST['title'];
  $detail = $_POST['detail'];
  $button_text = $_POST['button_text'];
  $button_link = $_POST['button_link'];

  //Validation  Start____________________________

  if (empty($title)) {
    $_SESSION['error_title'] = "Please Insert a title";
    header('location: ../add_banner.php');
  }

  if (empty($detail)) {
    $_SESSION['error_detail '] = "Please Insert a detail";
    header('location: ../add_banner.php');
  }

  if (empty($button_text)) {
    $_SESSION['error_button_text'] = "Please Insert a button_text";
    header('location: ../add_banner.php');
  }
  if (empty($button_link)) {
    $_SESSION['error_button_link'] = "Please Insert a button_link";
    header('location: ../add_banner.php');
  }
  //Validation  End____________________________

  else {
    $_insert = "INSERT INTO banner (title, deatil, button_text, button_link) VALUES('$title','$detail','$button_text','$button_link')";
    $_query = mysqli_query($_connect, $_insert);

    if ($_query) {
      $_SESSION['success'] = "Please Insert successful";
      header('location: ../add_banner.php');
    }
  }
}
