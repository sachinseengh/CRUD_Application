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

<!-- Alert -->
<?php  if(isset($_GET['alert'])){?>
        <div class="alert alert-success alert-dismissible fade show my-3 mx-5 mb-0" role="alert">

        <?php  if(isset($_GET['alert'])){?>

        <strong > <?php echo $_GET['alert']; ?> </strong>
        <?php } ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>



    <div class="container my-5 py-5 " style="margin:50px 10px 10px 550px;">

      <h1 style="font-family:'Times New Roman', Times, serif">User Registration</h1>

        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white ">
            <div class="card " style="width: 25rem;  ">
            
              <div class="card-body">
                <form class="row g-3" method="get" action="./operation/sign-up_process.php">
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputPassword4" name="password">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Name</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="name">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Address </label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address">
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">City</label>
                      <input type="text" class="form-control" id="inputCity" name="city">
                    </div>
                    
                    
                    <div class="col-12">
                      <button type="submit" class="btn btn-success">Register</button>
                      <a href="index.php" class="btn btn-primary"> Login</a>
                    </div>
                  </form>
              </div>
            </div>
            
            </div>
    </div>
    
</body>
</html>