<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <title>Appointment Confirmation</title>
  <style>
    .conf-info {
      min-height: 100vh;
      color: #0c0c0c;
      background-color: #00c6a9;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 30px;
    }

    .conf-info h1 {
      text-align: center;
    }

    .home-btn {
      background-color: #252525;
      color: #ffffff;
      padding: 10px 45px;
      border-radius: 5px;
      text-transform: uppercase;
    }

    .home-btn a {
      text-decoration: none;  
      color: #ffffff;
      text-transform: uppercase;
    }

    .contact_nav {
      display: flex;
      gap: 20px;
      padding: 10px;
    }

    .contact_nav span{
      color: black;
    }

    .sub-info {
      padding: 25px 40px;
      border-radius: 50px;
      background-color: #ffffff;
      -webkit-box-shadow: 0 0 25px 20px rgba(0, 0, 0, 0.07);
      box-shadow: 0 0 25px 20px rgba(0, 0, 0, 0.07);
    }


  </style>
</head>
<body>
<div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>
      </div>
  <div class="conf-info">
    <h1>Your appointment has been successfully scheduled!</h1>
    <h2>Submitted Information:</h2>
    <div class="sub-info">
      <p>Patient Name: <?php echo $_POST['inputPatientName']; ?></p>
      <p>Doctor's Name: <?php echo $_POST['inputDoctorName']; ?></p>
      <p>Department's Name: <?php echo $_POST['inputDepartmentName']; ?></p>
      <p>Phone Number: <?php echo $_POST['inputPhone']; ?></p>
      <p>Symptoms: <?php echo $_POST['inputSymptoms']; ?></p>
      <p>Chosen Date: <?php echo $_POST['inputDate']; ?></p>
    </div>
    <button class="home-btn"><a href="./index.php">Home Page</a></button>
  </div>
</body>
</html>
