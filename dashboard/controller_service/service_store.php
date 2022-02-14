
<?php
session_start();
require_once "../inc/db.php";

if (isset($_POST['submit'])) {

  $_icons_class = $_POST['icons_class'];
  $_icons_color = $_POST['icons_box_color'];
  $_title = $_POST['title'];
  $_description = $_POST['description'];
  $_data_delay = $_POST['data_delay'];

  // Validation  Start____________________________
  if (empty($_icons_class)) {
    $_SESSION['error_icons_class'] = "Please Insert a Icons class";
    header('location: ../add_services.php');
  }

  if (empty($_icons_color)) {
    $_SESSION['error_icons_box_color'] = "Please Insert a Icons box color";
    header('location: ../add_services.php');
  }

  if (empty($_title)) {
    $_SESSION['error_title'] = "Please Insert a Title";
    header('location: ../add_services.php');
  }

  if (empty($_description)) {
    $_SESSION['error_description'] = "Please Insert a Detail";
    header('location: ../add_services.php');
  }

  if (empty($_data_delay)) {
    $_SESSION['error_data_delay'] = "Please Insert a Data Delay";
    header('location: ../add_services.php');
  }

  //Validation  Ends____________________________
  else {

    $_insert = "INSERT INTO services (icons_class, icons_box_color, title, description, data_delay) 
     VALUES ('$_icons_class','$_icons_box_color','$_title','$_description','$_data_delay')";
     $_query = mysqli_query($_connect, $_insert);
     print_r($_query);

    if ($_query) {
      $_SESSION['success'] = "Please Insert successful";
      header('location: ../add_services.php');
    }
  }
   
}