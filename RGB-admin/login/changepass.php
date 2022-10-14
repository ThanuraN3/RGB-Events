<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="js\main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  
<?php
    $email = $emailErr = $addi_mail = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = test_input($_POST["name"]);
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
              }
            }

            if (empty($_POST["email"])) {
              $emailErr = "Email is required";
            } else {
              $email = test_input($_POST["email"]);
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
              }
            }

            if (empty($_POST["website"])) {
              $website = "";
            } else {
              $website = test_input($_POST["website"]);
              if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
              }
            }

            if (empty($_POST["comment"])) {
              $comment = "";
            } else {
              $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
              $genderErr = "Gender is required";
            } else {
              $gender = test_input($_POST["gender"]);
            }
      }
?>

<div class="form-wrapper">
  
  <form action="#" method="post">
    <h1 class="home-h3">Change Password</h1>

    <div class="mb-3">
        <label for="email" class="form-label" id="form-label">Enter Your Valid Email</label>
        <input type="email" class="form-control" id="email">
    </div>
    <input class="btn btn-primary" type="submit" value="Submit">
  </form>
  
  <div class="reminder">
    <button type="button" class="btn btn-success"><a href="index.php">Back</a></button>
  </div>
  
</div>

</body>
</html>