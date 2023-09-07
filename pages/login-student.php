<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9f64432b6.js" crossorigin="anonymous"></script>
    <title>LogIn</title>
  </head>
  <body>
    <h1 class="text-center my-3" >Log In As Student</h1>

    <div class="container">
            <!-- student login -->
            <form class="my-3" action="login-student.php" method="post" >
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user text-primary" ></i></span>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="enter name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key text-primary" ></i></span>
                    <input type="password" class="form-control" name="password" placeholder="enter password">
                </div>

                <button type="submit" class="btn btn-primary">Log In</button>
                <p class="my-2" >Don't have an account? <a href="signup-student.php">Click Here</a></p>

            </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>