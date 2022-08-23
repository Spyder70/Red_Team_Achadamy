<?php               
   require 'top.php';
   if (isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN'] != '') {
} else {
    header('location:User-login/index.php');
    die();
}

if (isset($_POST['submit'])) {
      $msg = '';
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $subject = mysqli_real_escape_string($conn, $_POST['subject']);
      $message = mysqli_real_escape_string($conn, $_POST['message']);
      $username=$_SESSION['USER_NAME'];

      $added_on = date('Y-m-d h:i:s');
      $insertquery = "INSERT into contact(name,email,subject,message,username,added_on)values('$name','$email','$subject','$message','$username','$added_on')";
      $iquery = mysqli_query($conn, $insertquery);
      header('location:thankyou.php');

   }
         
?>
<main id="main">
   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
         <h2>Contact Us</h2>
         <p>The College is housed in magnificent buildings with well-furnished classrooms, office rooms, staff rooms and Laboratories.</p>
      </div>
   </div>
   <!-- End Breadcrumbs -->
   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
      <div data-aos="fade-up">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3884.138606456233!2d75.01445531482459!3d13.216613290695516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbb56f5d068cf23%3A0x56e862efd18f4a81!2sSri%20Bhuvanendra%20Residential%20School!5e0!3m2!1sen!2sin!4v1659433965031!5m2!1sen!2sin" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="container" data-aos="fade-up">
         <div class="row mt-5">
            <div class="col-lg-4">
               <div class="info">
                  <div class="address">
                     <i class="bi bi-geo-alt"></i>
                     <h4>Location:</h4>
                     <p>Madhav Nagar
                        Karkala - 574 104
                        Udupi
                     </p>
                  </div>
                  <div class="email">
                     <i class="bi bi-envelope"></i>
                     <h4>Email:</h4>
                     <p>sbrs2002@gmail.com</p>
                  </div>
                  <div class="phone">
                     <i class="bi bi-phone"></i>
                     <h4>Call:</h4>
                     <p>+91 8258 235078</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
               <form method="post" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                     </div>
                     <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                     </div>
                  </div>
                  <div class="form-group mt-3">
                     <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                     <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div style="padding-top:20px;" class="text-center"><button style="background-color: #4CAF50;border: none; color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;" name="submit" type="submit">Send Message</button></div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- End Contact Section -->
</main>
<!-- End #main -->
<?php
   require 'footer.php';
?>