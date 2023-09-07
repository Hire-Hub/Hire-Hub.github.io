<?php
    // if form is a post request then connect to database
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'connect.php';

        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        // query insert for employer 
        $sql = "insert into `employer` (name,mobile,password) values('$name','$mobile','$password')";


        $result = mysqli_query($con,$sql);


        // employer conditional
        if ($result) {
            echo "data inserted";
        }
        else{
            die(mysqli_error($con));
        }

    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9f64432b6.js" crossorigin="anonymous"></script>
    <title>SignUp</title>
  </head>
  <body>
    <h1 class="text-center my-3" >Sign Up As Student</h1>

    <div class="container">
            <!-- student creation -->
            <form class="my-3" action="signup.php" method="post" >
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user text-primary" ></i></span>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="enter name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone text-primary" ></i></span>
                    <input type="number" class="form-control" name="mobile" placeholder="enter phone number">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key text-primary" ></i></span>
                    <input type="password" class="form-control" name="password" placeholder="enter password">
                </div>

                <button type="submit" class="btn btn-primary">Sign Up</button>
              
                <p class="my-2" >Already have an account? <a href="login.php">Click Here</a></p>

            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>