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
        if(!empty($_POST['meta-title']) && !empty($_POST['meta-tag']) && !empty($_POST['meta-dis'])){
            $meta_title = $_POST['meta-title'];
            $meta_tag = $_POST['meta-tag'];
            $meta_dis = $_POST['meta-dis'];

            $query = "INSERT INTO keyword (meta_title, meta_tag, meta_dis) VALUES('$meta_title','$meta_tag','$meta_dis')";
            $run = mysqli_query($con, $query) or die(mysqli_error());

            if ($run) {
                echo "keywors are Upload Succsesfull";
            }
            else {
                echo "keywords are not uploaded";
            }

        }
        else{
            echo "All fields are required";
        }
    }
?>
<div class="form-wrapper" id="home-wrapper"> 
    <h3 class="home-h3">ADD SEO</h3>
    <br>
    <from action="#" method="post">
          <div class="mb-3">
              <label for="email" class="form-label" id="form-label" >Meta Title</label>
              <input type="email" class="form-control" id="meta-title" value="">
          </div>
          <div class="mb-3">
              <label for="Reasonforinquiry" class="form-label" id="form-label">Meta Tags</label>
              <textarea class="form-control" id="meta-tag" rows="1" value=""></textarea>
          </div>
          <div class="mb-3">
              <label for="Reasonforinquiry" class="form-label" id="form-label">Meta Discription</label>
              <textarea class="form-control" id="meta-dis" rows="2" value=""></textarea>
          </div>
          <label for="Reasonforinquiry" class="form-label" id="form-label" value="">Add Image</label>
          <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
          <input class="btn btn-primary" type="submit" value="Add Meta">
          <button type="button" class="btn btn-danger">Clear</button>

          <br>
          <br>

    </form>      
    </div>
</div>
</body>
</html>