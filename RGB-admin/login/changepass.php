<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h1 class="home-h3">Change Password</h1>

    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Old Password" required></input>
    </div> 
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="New Password" required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Retype Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Submit"></input>
    </div>
  </form>
  
  <div class="reminder">
    <!-- <p>Not a member? <a href="#">Sign up now</a></p> -->
    <p><a href="index.php">Back</a></p>
  </div>
  
</div>

</body>
</html>