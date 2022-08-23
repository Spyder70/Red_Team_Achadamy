  <?php
require 'top.php';
$reshinfo = mysqli_query($conn, "SELECT * FROM hinfo where status='1'");
?>
 <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <?php $rowhinfo = mysqli_fetch_assoc($reshinfo) ?>
      <h1>The future of<br>Coding begins here</h1>
      <h2>Explore in sea of programing with us.</h2>
      <a href="courses.php" class="btn-get-started">Join for</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="<?php echo HINFO_IMAGE_SITE_PATH . $rowhinfo['image'] ?>" class="img-fluid" alt=""width="500px">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo $rowhinfo['heading'] ?></h3>
            <p class="fst-italic">
             <?php echo $rowhinfo['sub_heading'] ?>
            </p>
            <p>
              <?php echo $rowhinfo['sub_point'] ?>
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


   <?php
   $reshstaff = mysqli_query($conn, "SELECT * FROM hstaff where status='1'");
   ?>
    <!-- ======= Trainers Section ======= -->
    
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <?php
              while ($rowhstaff = mysqli_fetch_assoc($reshstaff)) { 
            ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo HSTAFF_IMAGE_SITE_PATH . $rowhstaff['image'] ?>" class="img-fluid" alt="">
              <div class="member-content">
                <h4><?php echo $rowhstaff['name'] ?></h4>
                <span><?php echo $rowhstaff['position'] ?></span>
                <p>
                  <?php echo $rowhstaff['dis'] ?>
                </p>
               
              </div>
            </div>
          </div>
            <?php } ?>
        </div>
      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

<?php
require 'footer.php';
?>