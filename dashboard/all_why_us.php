<?php
require_once "./inc/header.php";
require_once "./inc/db.php";

$_select = "SELECT * from why_us ";
$_query = mysqli_query($_connect, $_select);
$_fetch = mysqli_fetch_all($_query, 1);
// print_r($_fetch);

?>



<div class="container">

  <div class="card col-12 mx-auto mt-5 px-0 shadow-lg rounded">

    <div class="card-header " style="background: #265084;">
      <h2 class="text-white">Add services</h2>
    </div>
    <div class="card-body" style="background: 49596d;">
      <table class="table table-responsive">
        <tr>
          <th>#</th>
          <th>image</th>
          <th>video_link</th>
          <th>title_one</th>
          <th>text_one</th>
          <th>icon_one</th>
          <th>title_two</th>
          <th>text_two</th>
          <th>icon_two</th>
          
        </tr>

        <?php
        foreach ($_fetch as $key => $data) {
        ?>
          <tr>
            <td> <?= ++$key ?> </td>
            <td> <?= $data['image'] ?> </td>
            <td> <?= $data['video_link'] ?> </td>
            <td> <?= $data['title_one'] ?> </td>
            <td> <?= $data['text_one'] ?> </td>
            <td> <?= $data['title_two'] ?> </td>
            <td> <?= $data['text_two'] ?> </td>
            <td> <?= $data['icon_two'] ?> </td>
            <td>
              
            </td>

            <td> <a href="./edit_why_us.php?id=<?= $data['id']?>" class="btn btn-sm btn-success">Edit</a> </td>
            <td>
             
            </td>

          </tr>

        <?php
        }
        ?>

      </table>
    </div>
  </div>
</div>




<?php

require_once "./inc/footer.php";
