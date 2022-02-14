<?php
require_once "./inc/header.php";
require_once "./inc/db.php";




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
      <h2 class="text-white">Add Why Us</h2>
    </div>
    <div class="card-body" style="background: #49596d;">
      <form action="./controller_why_us/why_us_store.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <input type="text" name="title_one" class="form-control  my-3" placeholder="Title_one">
          <span class="text-danger">
            <?= isset($_SESSION['error_title_one']) ? $_SESSION['error_title_one'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <label class="text-white">Description Two</label>
          <textarea name="text_one" class="form-control  my-3"></textarea>
          <span class="text-danger">
            <?= isset($_SESSION['error_text_one']) ?  $_SESSION['error_text_one'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <input type="text" name="icon_one" class="form-control my-3"  placeholder="Icon_one">
          <span class="text-danger">
            <?= isset($_SESSION['error_button_text']) ? $_SESSION['error_button_text'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <input type="text" name="title_two" class="form-control  my-3"  placeholder="Title_two">
          <span class="text-danger">
            <?= isset($_SESSION['error_title_two']) ? $_SESSION['error_title_two'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <label class="text-white">Description Two</label>
          <textarea name="text_two" class="form-control  my-3"></textarea>
          <span class="text-danger">
            <?= isset($_SESSION['error_text_two']) ?  $_SESSION['error_text_two'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <input type="text" name="icon_two" class="form-control my-3"  placeholder="Icon_two">
          <span class="text-danger">
            <?= isset($_SESSION['error_icon_two']) ? $_SESSION['error_icon_two'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <label class="text-white">video ink</label>
          <input type="text" name="video_link" class="form-control my-3" placeholder="video_link">
          <span class="text-danger">
            <?= isset($_SESSION['error_video_link']) ? $_SESSION['error_video_link'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <input type="file" name="image" class="form-control my-3" value="" placeholder="Image">
          <span class="text-danger">
            <?= isset($_SESSION['error_image']) ? $_SESSION['error_image'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <img src="../img/<?= $_fetch['image'] ?>" width="100" alt="">
        </div>



        <button type="submit" class="btn btn-sm text-white mx-auto" name="submit" style="background:hotpink; padding: 10px 40px; border: 0; font-size: 18px; border-radius: 50px;margin-left: 75px;">Update</button>
      </form>
    </div>
  </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>



<?php

unset($_SESSION['success']);
require_once "./inc/footer.php";
