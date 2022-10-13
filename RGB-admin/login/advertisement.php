<?php 
include('dbcon.php');
include('session.php'); 
include('slidebar.php');


?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    // $connection = new mysql($localhost, $username, $password, $dbname);

    if (isset($_POST['submit'])){
        if(!empty($_POST['ad-title']) && !empty($_POST['ad-content'])){
            $ad_title = $_POST['add-title'];
            $ad_content = $_POST['ad-content'];

            $query = "INSERT INTO ad (ad_title,ad_content) VALUES('$ad_title','$ad_content')";
            $run = mysqli_query($con, $query) or die(mysqli_error());

            if ($run) {
                echo "Advertisements are Post Sucsessfully";
            }
            else {
                echo "Advertisements are not Posted";
            }

        }
        else{
            echo "All fields are required";
        }
    }
?>
<div class="form-wrapper" id="home-wrapper"> 
    <a href="advertisement-list.php">
        <button type="button" class="btn btn-success" id="bloglist-button">Advertisement List</button>
    </a>
    <h3 class="home-h3">ADD ADVERTISEMENT</h3>
    <br>
    <from action="#" method="post">
          <div class="mb-3">
              <label for="email" class="form-label" id="form-label" >Add Advertisement Title</label>
              <input type="email" class="form-control" id="ad-title">
          </div>
          <div class="mb-3">
              <label for="Reasonforinquiry" class="form-label" id="form-label">Add Advertisement Content</label>
              <textarea class="form-control" id="ad-content" rows="4"></textarea>
          </div>
          <label for="Reasonforinquiry" class="form-label" id="form-label">Add Image</label>
          <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
          <input class="btn btn-primary" type="submit" value="Add advertisement">
          <button type="button" class="btn btn-danger" value="">Clear</button>

          <br>
          <br>

    </form>      
    </div>
</div>
</body>
</html>