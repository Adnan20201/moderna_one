<?php
  require_once "../inc/db.php";
  $_id = $_GET["id"];

  $_select = "SELECT status from services where id = '$_id'";
  $_query = mysqli_query($_connect, $_select);
  $_fetch = mysqli_fetch_assoc($_query);
  //  print_r($_fetch);

  if ($_fetch['status'] == 0) {
    $_update = "UPDATE services SET  status = 1 WHERE id ='$_id'";
    $_query = mysqli_query($_connect, $_update);
  } else {
    $_update = "UPDATE services SET  status = 0 WHERE id ='$_id'";
    $_query = mysqli_query($_connect, $_update);
  }
  header('location: ../all_services/php');
  ?>