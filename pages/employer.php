<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9f64432b6.js" crossorigin="anonymous"></script>
    <title>Employer</title>
  </head>
  <body class="bg-light" style="font-size:23px;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-primary mx-2" style="font-size:30px; font-weight:bold;" href="#">Company</a>
            <!-- <a href="" class="btn btn-primary">JobHunt</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto" id="navbar">
                <li class="nav-item  mx-1 my-1">
                    <a href="employer.php" class="btn btn-outline-primary"><i class="fa fa-house"></i> Home</a>
                </li>
                <li class="nav-item mx-1 my-1">
                    <a href="#applicants" class="btn btn-outline-primary"><i class="fa fa-gear"></i> Applicants</a>
                </li>
                <li class="nav-item mx-1 my-1">
                    <a href="#about" class="btn btn-outline-primary"><i class="fa fa-users"></i> About</a>
                </li>
                <li class="nav-item mx-1 my-1">
                        <a class=" btn btn-outline-primary" aria-current="page" href="#"><i class="fa fa-right-to-bracket "></i> Logout</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-1 my-1">
                        <a class=" btn btn-outline-primary" aria-current="page" href="#"><i class="fa fa-whatsapp "></i> Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- job creation -->
    <div class="container my-3" id="job">
        <form method="post" action="employer.php">
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="What kind of job or service do you need?" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-3"><i class="fa-solid fa-paper-plane"></i>  Create Post</button>
        </form>
    </div>

    <!-- list of applicants -->
    <div class="container" id="applicants">
        <hr>
        <h2 class="text-center" >List of applicants</h2>

        <ul class="list-group"  >
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <p>Student 1</p>
                <span class="badge bg-primary rounded-pill">
                    <i class="fa-brands fa-whatsapp"></i>
                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <p>Student 2</p>
                <span class="badge bg-primary rounded-pill">
                    <i class="fa-brands fa-whatsapp"></i>
                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <p>Student 3</p>
                <span class="badge bg-primary rounded-pill">
                    <i class="fa-brands fa-whatsapp"></i>
                </span>
            </li>
        </ul>
    </div>

    <!-- about us section -->
    <section class="bg-light py-5" id="about">
        <div class="container">
            <div class="row">
                <h2 class="text-center my-3">About Us</h2>
                <div class="col-lg-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec suscipit nisi. Integer blandit metus eu cursus venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p>Sed dictum commodo orci, nec vehicula felis. Morbi nec dolor eu felis consequat ultricies. Ut ornare sollicitudin purus, sit amet tincidunt felis gravida vitae.</p>
                </div>
                <div class="col-lg-6">
                <img src="../images/my intern.jpg" alt="About Us Image" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <div class="footer mt-2 text-center">
        <footer>
            <p> <span id="year"> </span> © JobHunt. All rights reserved</p>
        </footer>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>