<?php
require_once "./login/inc/header.php";
require_once "./login/inc/db.php";

// Banner Query
$_banner_select = "SELECT * from banner WHERE status = 0  ORDER BY id DESC";
$_banner_query = mysqli_query($_connect, $_banner_select);
$_banner_fetch = mysqli_fetch_all($_banner_query, 1);
// print_r($fetch);  


//Blog Query

$_services_select = "SELECT * FROM services  WHERE status = 0 ORDER BY id DESC LIMIT 4";
$_services_query = mysqli_query($_connect, $_services_select);
$_services_fetch = mysqli_fetch_all($_services_query , 1);


 // Why Us Query
$select ="SELECT * FROM why_us" ;
$query = mysqli_query($_connect,$select);
$fetch =mysqli_fetch_assoc($query); 

?>





<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">


    <?php
    foreach ($_banner_fetch as $key => $_banner) {
    ?>
      <!-- Slide 1 -->
      <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"> <?= $_banner['title'] ?>  </h2>
          <p class="animate__animated animate__fadeInUp">  <?= $_banner['deatil'] ?>   </p>

          <?php
          if (($_banner['button_text'] != '')) {
          ?>
            <a href=" <?= $_banner['button_link'] ?>" class="btn-get-started animate__animated animate__fadeInUp"> <?= $_banner['button_text'] ?>  </a>
       
         <?php 
           }
          ?>
        </div>
      </div>

    <?php
    }

    ?>




    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Services Section ======= -->

  <section class="services">
    <div class="container">

      <div class="row">

        <?php
        foreach ($_services_fetch as $key => $_services) {
        ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" date-aos-delay="<?= $_services['data_delay']?> ">
            <div class="icon-box icon-box-<?= $_services['icons_box_color']?> ">
              <div class="icon"><i class="bx <?= $_services['icons_class']?> "></i> </div>
              <h4 class="title"><a href=""> <?= $_services['title']?> </a></h4>
              <p class="description"> <?= $_services['description']?> </p>
            </div>
          </div>

        <?php
         }
        ?>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="./dashboard/img/<?= $fetch['image'] ?>" class="img-fluid" alt="">
          <a href="<?= $fetch['video_link']?>" target="blank" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

          <div class="icon-box icon-box-pink ">
            <div class="icon icon-box icon-box-pink"><i class="bx <?= $fetch['icon_one']?>"></i></div>
            <h4 class="title"><a href=""><?= $fetch['title_one']?></a></h4>
            <p class="description"><?= $fetch['text_one']?></p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx <?= $fetch['icon_two']?> "></i></div>
            <h4 class="title"><a href=""><?= $fetch['title_two']?></a></h4>
            <p class="description"><?= $fetch['text_two']?></p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Features Section ======= -->
  <section class="features">
    <div class="container">

      <div class="section-title">
        <h2>Features</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="img/features-1.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
          </ul>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="img/features-2.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1">
          <h3>Corporis temporibus maiores provident</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="img/features-3.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5">
          <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
          <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
          <ul>
            <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
          </ul>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="img/features-4.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1">
          <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

</main><!-- End #main -->

<?php
require_once "./login/inc//footer.php";
?>