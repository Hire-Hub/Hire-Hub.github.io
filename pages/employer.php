<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9f64432b6.js" crossorigin="anonymous"></script>
    <title>Employer</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand text-primary mx-2" style="font-size:30px; font-weight:bold;" href="index.php">Company</a>
            <!-- <a href="" class="btn btn-primary">JobHunt</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto" id="navbar">
                <li class="nav-item  mx-1 my-1">
                    <a href="index.php" class="btn btn-outline-primary"><i class="fa fa-house"></i> Home</a>
                </li>
                <li class="nav-item mx-1 my-1">
                    <a href="#service" class="btn btn-outline-primary"><i class="fa fa-gear"></i> Applicants</a>
                </li>
                <li class="nav-item mx-1 my-1">
                    <a href="#about" class="btn btn-outline-primary"><i class="fa fa-users"></i> About</a>
                </li>
                <li class="nav-item mx-1 my-1">
                        <a class=" btn btn-outline-primary" aria-current="page" href="signup.php"><i class="fa fa-right-to-bracket "></i> SignIn</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-1 my-1">
                        <a class=" btn btn-outline-primary" aria-current="page" href="signup.php"><i class="fa fa-whatsapp "></i> Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>