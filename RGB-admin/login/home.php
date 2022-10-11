<?php 
include('dbcon.php');
include('session.php'); 
include('slidebar.php');
$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <center><h3>Welcome</h3></center>
            <div id="content">
              <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                  <input class="form-control" type="file" name="uploadfile" value="" />
                </div>
                <div class="form-group">
                  <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
                </div>
              </form>
            </div>
            <div id="display-image">
            <?php
              $query = " select * from image ";
              $result = mysqli_query($db, $query);

              while ($data = mysqli_fetch_assoc($result)) {
            ?>
              <img src="./image/<?php echo $data['filename']; ?>">

            <?php
              }
            ?>
            </div>   
	 <div class="reminder">
  </div>

</div>
</body>
</html>