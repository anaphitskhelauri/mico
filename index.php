<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
  <?php
  include 'header.php';
  ?>
    <!-- end header section -->

    <!-- slider section -->

    <section>
  <?php include 'functions.php'; ?>
  <?php
  $carousel_items = array(
    array(
        "image" => "images/slider-img.jpg",
        "title" => "Mico Hospital",
        "description" => "When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to",
        "button_text" => "Contact Us"
    ),
    array(
        "image" => "images/slider-img.jpg",
        "title" => "Mico Hospital",
        "description" => "When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to",
        "button_text" => "Contact Us"
    ),
    array(
        "image" => "images/slider-img.jpg",
        "title" => "Mico Hospital",
        "description" => "When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to",
        "button_text" => "Contact Us"
    )
);

echo generateCarousel($carousel_items);
?>
  </section>
    
    <!-- end slider section -->
  </div>


  <!-- book section -->

  <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form action="confirmation.php" method="POST">
            <!-- add action and method origin code -->
            <h4>
              BOOK <span>APPOINTMENT</span>
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name </label>
                <input type="text" name="inputPatientName" class="form-control" id="inputPatientName" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor's Name</label>
                <select name="inputDoctorName" class="form-control wide" id="inputDoctorName">
                  <option value="Doctor A">Doctor A</option>
                  <option value="Doctor B">Doctor B</option>
                  <option value="Doctor C">Doctor C</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department's Name</label>
                <select name="inputDepartmentName" class="form-control wide" id="inputDepartmentName">
                  <option value="Department X">Department X</option>
                  <option value="Department Y">Department Y</option>
                  <option value="Department Z">Department Z</option>
                </select>
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" name="inputPhone" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" name="inputSymptoms" class="form-control" id="inputSymptoms" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input type="text" name="inputDate" class="form-control" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>




  <!-- end book section -->


  <!-- about section -->

  <section class="about_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/about-img.jpg" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              About <span>Hospital</span>
            </h2>
          </div>
          <?php
            // Dynamic content generation
            $about_content = "has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors";
          ?>
          <p>
            <?php echo $about_content; ?>
          </p>
          <a href="#">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- end about section -->


  <!-- treatment section -->

  <section class="treatment_section layout_padding">
    <div class="side_img">
        <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Hospital <span>Treatment</span>
            </h2>
        </div>
        <div class="row">
            <?php
            // Array of treatment data
            $treatments = array(
                array("title" => "Nephrologist Care", "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything"),
                array("title" => "Eye Care", "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything"),
                array("title" => "Pediatrician Clinic", "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything"),
                array("title" => "Parental Care", "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything")
            );

            // treatments Loop
            foreach ($treatments as $treatment) {
            ?>
                <div class="col-md-6 col-lg-3">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/t1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h4><?php echo $treatment['title']; ?></h4>
                            <p><?php echo $treatment['description']; ?></p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

  <!-- end treatment section -->

  <!-- team section -->
  <section>
    <?php
  $doctors = array(
    array(
        "name" => "Hennry",
        "qualification" => "MBBS",
        "image" => "images/team1.jpg",
        "facebook" => "#",
        "twitter" => "#",
        "linkedin" => "#",
        "instagram" => "#"
    ),
    array(
        "name" => "Jenni",
        "qualification" => "MBBS",
        "image" => "images/team2.jpg",
        "facebook" => "#",
        "twitter" => "#",
        "linkedin" => "#",
        "instagram" => "#"
    ),
    array(
        "name" => "Morco",
        "qualification" => "MBBS",
        "image" => "images/team3.jpg",
        "facebook" => "#",
        "twitter" => "#",
        "linkedin" => "#",
        "instagram" => "#"
    )
);
echo generateDoctorSection($doctors);
?>
  </section>
  <!-- end team section -->


  <!-- client section -->
  <section>
  <?php 
  $testimonials = array(
    array(
        "name" => "Morijorch",
        "position" => "Default model text",
        "content" => "Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
    ),
    array(
        "name" => "Rochak",
        "position" => "Default model text",
        "content" => "Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
    ),
    array(
        "name" => "Brad Johns",
        "position" => "Default model text",
        "content" => "Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
    )
);

echo generateTestimonialSection($testimonials);
?>
  </section>
<!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>Get In Touch</h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="submit_form.php" method="post">
              <div>
                <input type="text" name="fullName" placeholder="Full Name" />
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" name="phoneNumber" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" name="message" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button type="submit">SEND</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- footer section -->
  <?php
  include 'footer.php';
  ?>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>