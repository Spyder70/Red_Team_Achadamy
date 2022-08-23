<?php
require 'top.php';
?>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <?php
        $rescourse = mysqli_query($conn, "SELECT * FROM about where status='1'");
      $rowcourse = mysqli_fetch_assoc($rescourse) ?>
        <p><?php echo $rowcourse['heading1'] ?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="<?php echo ABOUT_IMAGE_SITE_PATH . $rowcourse['image'] ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo $rowcourse['heading2'] ?></h3>
            <p class="fst-italic">
              <?php echo $rowcourse['heading3'] ?>
            </p>
           
            <p>
            <?php echo $rowcourse['heading4'] ?>
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  </main><!-- End #main -->
  <?php
require 'footer.php';
?>
