  <?php
require 'top.php';
$rescou = mysqli_query($conn, "SELECT * FROM course where status='1'");
        $res = mysqli_query($conn, "SELECT * FROM course where status='1'");
        ?>


<main id="main" data-aos="fade-in">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <?php $rowcou = mysqli_fetch_assoc($rescou) ?>
        <p><?php echo $rowcou['chead'] ?></p>
      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <?php 
                    while ($row = mysqli_fetch_assoc($res)) { ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?php echo COURSE_IMAGE_SITE_PATH . $row['image'] ?>" class="img-fluid"width="200px"height="200px" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                 
                  <h4><?php echo $row['cname'] ?></h4>
                  <p class="price"><?php echo $row['cprice'] ?></p>
                </div>
                <h3><?php echo $row['cname1'] ?></h3>
                <p><?php echo $row['cdes'] ?></p>
              </div>
            </div>
          </div> <!-- End Course Item-->
           <?php } ?>
        </div>
      </div>
    </section><!-- End Courses Section -->
    
  </main><!-- End #main -->
  <?php
require 'footer.php';
?>
