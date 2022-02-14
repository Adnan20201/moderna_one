<?php
require_once "./inc/header.php";
?>


<div class="container">

  <div class="card col-10 mx-auto mt-5 px-0 shadow-lg rounded">
    <?php
    if (isset($_SESSION['success'])) {
    ?>
      <span class="alert alert-danger">
        <?= $_SESSION['success'] ?>
      </span>
    <?php
    }
    ?>

    <div class="card-header " style="background: #265084;">
      <h2 class="text-white">Add Service</h2>
    </div>

    <div class="card-body" style="background: #49596d;">
      <form action="./controller_service/service_store.php" method="POST">

        <div class="mb-3">
          <input type="text" name="icons_class" class="form-control my-3" placeholder="Icons class">
          <span class="text-danger">
            <?= isset($_SESSION['error_icons_class']) ? $_SESSION['error_icons_class']  : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <input type="text" name="icons_box_color" class="form-control my-3"  placeholder="Icons Color">
          <span class="text-danger">
            <?= isset($_SESSION['error_icons_box_color']) ? $_SESSION['error_icons_box_color']: '' ?>
          </span>
        </div>

        <div class="mb-3">
          <input type="text" name="title" class="form-control my-3"  placeholder="Service Title">
          <span class="text-danger">
            <?= isset($_SESSION['error_title'] ) ? $_SESSION['error_title']  : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <textarea name="description" class="form-control my-3"  placeholder="Service description"></textarea>
          <span class="text-danger">
            <?= isset($_SESSION['error_description']) ?  $_SESSION['error_description'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <input type="text" name="data_delay" class="form-control my-3"  placeholder="Data Delay">
          <span class="text-danger">
            <?= isset($_SESSION['error_data_delay']) ? $_SESSION['error_data_delay'] : '' ?>
          </span>
        </div>

        <button type="submit" class="btn btn-sm text-white mx-auto" name="submit" style="background:hotpink; padding: 10px 40px; border: 0; font-size: 18px; border-radius: 50px;margin-left: 75px;">Submit</button>
     
       </form>
    </div>
  </div>
</div>





<?php

unset($_SESSION['success']);
require_once "./inc/footer.php";
