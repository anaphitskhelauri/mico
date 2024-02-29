<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission Confirmation</title>
  <style>
    body {
      background-image: url(images/t4.png);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 100px;
    }
    .form-submit {
        margin-top: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-submit h1{
        background-color: #ffffff;
        padding: 100px 30px;
        border-radius: 50px;
        text-align: center;
    }

    .home-btn {

      background-color: #252525;
      color: #ffffff;
      padding: 10px 45px;
      border-radius: 5px;
      margin-top: 10px;
      text-transform: uppercase;
    }

    .home-btn a {
      text-decoration: none;  
      color: #ffffff;
      text-transform: uppercase;
    }
  </style>
</head>
<body>
  <div class="form-submit">
    <h1>Your form is submitted.</h1>
  </div>
  <button class="home-btn"><a href="./index.php">Home Page</a></button>
</body>
</html>