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

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php
    include 'header.php';
    ?>
    <!-- end header section -->
  </div>


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