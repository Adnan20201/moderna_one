<?php
require_once "./inc/header.php";
require_once "./inc/db.php";

$_select = "SELECT * from services";
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
          <th>icons_class</th>
          <th>icons_box_color</th>
          <th>title</th>
          <th>description</th>
          <th>data_delay</th>
          <th>Action</th>
        </tr>

        <?php
        foreach ($_fetch as $key => $data) {
        ?>
          <tr>
            <td> <?= ++$key ?> </td>
            <td> <?= $data['icons_class'] ?> </td>
            <td> <?= $data['icons_box_color'] ?> </td>
            <td> <?= $data['title'] ?> </td>
            <td> <?= $data['description'] ?> </td>
            <td> <?= $data['data_delay'] ?> </td>
            <td>
              <span class="text-white btn <?= $data['status'] == 0 ? 'bg-info' : 'bg-danger' ?>">
                <?= $data['status'] == 0 ? 'Active' : 'Deactive' ?>
              </span>
            </td>

            <td> <a href="#" class="btn btn-sm btn-success">Edit</a> </td>
            <td>
              <span class="text-white btn btn-sm <?= $data['status'] == 0 ? 'bg-danger' : 'bg-info' ?>">
                <a href="./controller_banner/service_status.php?id=<?= $data['id'] ?>" class="btn btn-sm">
                  <?= $data['status'] == 0 ? 'Deactive' : 'Active' ?>
                </a>
              </span>
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
