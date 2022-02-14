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
    <h2 class="text-white">Add Banner</h2>
  </div>
  <div class="card-body" style="background: #49596d;">
    <form action="./controller_banner/banner_store.php" method="POST">

      <div class="mb-3">
        <input type="text" name="title" class="form-control  my-3" placeholder="Banner Title">
        <span class="text-danger">
          <?= isset($_SESSION['error_title'] ) ? $_SESSION['error_title'] : '' ?>
        </span>
      </div>
      
      <div class="mb-3">
        <textarea name="detail" class="form-control  my-3" placeholder="Banner Details"></textarea>
        <span class="text-danger">
          <?= isset($_SESSION['error_detail']) ?  $_SESSION['error_detail '] : '' ?>
        </span>
      </div>

      <div class="mb-3">
        <input type="text" name="button_text" class="form-control my-3"  placeholder="Buttom Text">
        <span class="text-danger">
          <?= isset($_SESSION['error_button_text']) ? $_SESSION['error_button_text'] : '' ?>
        </span>
      </div>

      <div class="mb-3">
        <input type="text" name="button_link" class="form-control my-3"  placeholder="Buttom URl">
        <span class="text-danger">
          <?= isset($_SESSION['error_button_link']) ? $_SESSION['error_button_link'] : '' ?>
        </span>
      </div>

      <button type="submit" class="btn btn-sm text-white mx-auto" name="submit" style="background:hotpink; padding: 10px 40px; border: 0; font-size: 18px; border-radius: 50px;margin-left: 75px;">Submit</button>
    </form>
  </div>
</div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>



<?php

unset($_SESSION['success'] );
require_once "./inc/footer.php";
