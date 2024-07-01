<?php
session_start();

if(isset($_SESSION['email'])){
  header('Location:home.php');

  
}else { ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Alert msg -->
    <?php  if(isset($_GET['alert'])){?>
        <div class="alert alert-success alert-dismissible fade show my-3 mx-5 mb-0" role="alert">

        <?php  if(isset($_GET['alert'])){?>

        <strong > <?php echo $_GET['alert']; ?> </strong>
        <?php } ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>

    
    <div class="container  py-5 " style="margin:0px 10px 10px 550px;">


        <h1 style="font-family:'Times New Roman', Times, serif">User Login</h1>

        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white ">
            <div class="card " style="width: 25rem;  ">
            
              <div class="card-body">
                <form action="./operation/login_process.php" method="get">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Login</button>
                    <a href="register.php"class="btn btn-primary">Register</a>
                   
                  </form>
              </div>
            </div>
            
            </div>
    </div>
    
</body>
</html>

<?php  } ?>
