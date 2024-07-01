<?php
session_start();
include './database/database.php';

if(isset($_SESSION['email'])){

  // $email= $_SESSION['email'];
  $email =$_SESSION['email'];
  
}
// $email ="sachinseengh@gmail.com";

$sql =" select * from details  where email ='$email'";


$res = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($res);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5 py-5 " style="margin:50px 10px 10px 550px;">

      <h1 style="font-family:'Times New Roman', Times, serif">Update Details</h1>

        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white ">
            <div class="card " style="width: 25rem;  ">
            
              <div class="card-body">
                <form class="row g-3 " method="get" action="./operation/edit_process.php">
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label"  >Email</label>
                      <input type="email" class="form-control" id="inputEmail4" value=<?php echo $row['email']; ?> disabled name="email">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputPassword4" value=<?php echo $row['password']; ?>  name="password">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Name</label>
                      <textarea type="text" class="form-control" id="inputAddress"   name="name"><?php echo $row['name']; ?> </textarea>
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <textarea type="text" class="form-control" id="inputAddress"    name="address"><?php echo $row['address']; ?> </textarea>
                    </div>
                    
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">City</label>
                      <textarea type="text" class="form-control" id="inputCity"  name="city" ><?php echo $row['city']; ?> </textarea>
                    </div>
                    
                    
                    <div class="col-12">
                      <button type="submit" class="btn btn-success">Update</button>
                      <a href="home.php" class="btn btn-primary">Cancel</a>
                    </div>
                  </form>
              </div>
            </div>
            
            </div>
    </div>
    
</body>
</html>