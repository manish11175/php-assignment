<?php

include 'connection.php';

?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $name = $_POST['emp-name'];
  $designation = $_POST['designation'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
 
 $query="INSERT INTO employee (name,designation,address,phone) VALUES ('$name','$designation','$address','$phone')";
 $data=mysqli_query($conn,$query);
 if($data){
     echo "Data inserted successfully";
 }

}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <?php include 'link.php'?>
  </head>
  <body>
  <div class="container-fluid my-5" id="main">
  <div class="container">
  <form action="" method="post">
  <div class="form-group">
    <label for="emp-name">Name</label>
    <input type="text" class="form-control" id="emp-name" name="emp-name" placeholder="john" required>
  </div>
  <div class="form-group">
    <label for="designation">Designation</label>
    <input class="form-control" id="designation" name="designation" required/>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input class="form-control" id="phone" name="phone" required/>
  </div>
  <button class="btn btn-info">Add</button>
 
</form>

<a href="show.php" role="button"  class="btn btn-success my-4">Show</a>
  </div>
  </div>
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>