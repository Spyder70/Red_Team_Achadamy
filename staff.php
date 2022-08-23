<?php
require 'top.php';
$resstaff = mysqli_query($conn, "SELECT * FROM staff where status='1'");
?>
 <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Staff</h2>
        <p>Blessed by His Holiness Srimath Bhuvanendra Thirtha Swamiji of Kashi Mutt, visualized by Padmashree Dr. T.M.A, Pai, the architect of modern Manipal, steered by the enlightened Trustees of Sri Bhuvanendra College, Karkala, Sri Bhuvanendra Residential School has taken its birth on 01-06-2001 in the midst of lavish and serene nature's greenery overlooking the imposing range of western ghats. </p>
      </div>
    </div><!-- End Breadcrumbs -->
 
    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php while ($rowstaff = mysqli_fetch_assoc($resstaff)) { ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo STAFF_IMAGE_SITE_PATH . $rowstaff['image'] ?>" class="img-fluid" alt="">
              <div class="member-content">
                <h4><?php echo $rowstaff['name'] ?></h4>
                <span><?php echo $rowstaff['position'] ?></span>
                <p>
                 <?php echo $rowstaff['des'] ?>
               
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
