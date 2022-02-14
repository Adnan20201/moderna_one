<?php
session_start();
require_once "../inc/db.php";

if (isset($_POST['submit'])) {
  $_id = $_POST['id'];

  $_title_one = $_POST['title_one'];
  $_title_two = $_POST['title_two'];
  $_text_one = $_POST['text_one'];
  $_text_two = $_POST['text_two'];
  $_icon_one = $_POST['icon_one'];
  $_icon_two = $_POST['icon_two'];
  $_video_link = $_POST['video_link'];
  $_image = $_FILES['image'];

  if (empty($_image)) {
    $_SESSION['error_icons_class'] = "Please Insert a Icons class";
    header('location: ../add_why_us.php');
  } else {

    // $_select = "SELECT image FROM why_us WHERE id ='$_id'";
    // $_query = mysqli_query($_connect, $_select);
    // $_ex_fetch = mysqli_fetch_assoc($_query);
   
    if($_file_upload){

      $_insert = "INSERT INTO why_us( image, video_link, title_one, text_one, icon_one, title_two, text_two, icon_two) VALUES 
      ('$_new_img_name','$_video_link','$_title_one','$_text_one','$_icon_one','$_title_two','$_text_two','$_icon_two')" ;
      
      $_query = mysqli_query($_connect, $_insert);
      
      if($_query){
      
         header('location: ../add_why_us.php');
      } 
      
      }
      

  }
}
