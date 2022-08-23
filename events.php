<?php
require 'top.php';
$resevent = mysqli_query($conn, "SELECT * FROM events where status='1'");
$res = mysqli_query($conn, "SELECT * FROM events where status='1'");
?>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p> <?php $rowevent = mysqli_fetch_assoc($resevent) ?>
        <?php echo $rowevent['edes'] ?> </p>
      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <?php   while ($row = mysqli_fetch_assoc($res)) { ?>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="<?php echo EVENTS_IMAGE_SITE_PATH . $row['image'] ?>"width="700px"height="425px" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $row['ename'] ?></a></h5>
                <p class="fst-italic text-center"><?php echo $row['etime'] ?></p>
                <p class="card-text"><?php echo $row['edes'] ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->
  <?php
require 'footer.php';
?>
